<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


use Illuminate\Support\Facades\Session;





class ProductController extends Controller
{
    //
    function index(){
        //return Product::all();
 //ovo vraca podatke u json faju

        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);

    }

    /*function search(Request $req){
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['product'=>$data]);
    }*/


    function addToCart(Request $req){

        if($req->session()->has('user')){

            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');


        }
        else{
            return redirect('/login');
        }
        
    }
    

    static function cartItem(){
        $userId= Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();


    }



}
