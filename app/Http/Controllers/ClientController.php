<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use App\Cart;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    //
    public function home() {

        $sliders=Slider::All()->where('status',1);
        $products=Product::All()->where('status',1);

        return view('client.home')->with('sliders',$sliders)->with('products',$products);
    }
    public function shop() {
        $categories=Category::All();
        $products=Product::All()->where('status',1);

        return view('client.shop')->with('categories',$categories)->with('products',$products);
    }

    public function addtocart($id){
        $product=Product::find($id);
        
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        Session::put('cart',$cart);

        //dd(Session::get('cart'));
        return back();
    }
    public function cart() {
        if(!Session::has('cart')){
            return view('client.cart');
        }
        
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);

        return view('client.cart',['products'=>$cart->items]);
        
    }
    public function update_qty(Request $request , $id){
        $oldCart=Session::has('cart') ? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);

        Session::put('cart',$cart);
        return back();
    }

    public function remove_from_cart($id){
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect('/cart');
    }

    public function checkout(){

        if(!Session::has('client')){
            return view('client.login');
        }
        return view('client.checkout');
    }
    public function login(){
        return view('client.login');
    }
    public function logout(){
        Session::forget('client');

        return redirect('/shop');
    }

    public function signup(){
        return view('client.signup');
    }

    public function create_account(Request $request){
         $this->validate($request,['email' => 'email|required|unique:clients',
                                   'password' => 'required|min:4']);
        $client=new Client();
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));
        $client->save();

        return back()->with('status','Your account has been successfully created !!');
    }

    public function access_account(Request $request){
        $this->validate($request,['email' => 'email|required',
                                   'password' => 'required']);
        $client = Client::where('email', $request->input('email'))->first();
        if ($client) {
            # code...
            if (Hash::check($request->input('password'), $client->password)) {
                Session::put('client',$client);
                return redirect('/shop');
            } else {
                return back()->with('status','Wrong email or password');
            }
            
        } else {
            return back()->with('status', 'You do not have an account with this email');
        }
        
    }

    public function orders(){
        return view('admin.orders');
    }

}
