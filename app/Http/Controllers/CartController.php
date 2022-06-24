<?php

namespace App\Http\Controllers;

use Cart;
use config;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Session;
use Site;
class CartController extends Controller
{


    public function cartStore(Request $request)
    {


        DB::table('carts')->insert([
            'products_id' =>$request->session()->get('id_product'),
            'user_id'=>$request->session()->get('user_id'),
            'quantity'=>$request->session()->get('quantity_product'),
            'name'=>$request->session()->get('name_product'),
            'price'=>$request->session()->get('price_product'),
            'image'=>$request->session()->get('image_product'),   ]);

            return redirect()->route('cart.list');


    }

    public function cartList(Request $request)
    {

        // session(['id_user'])==auth()->user()->id

        // $value = $request->session()->get('id_user');
        // if (Session::get('user_id')==Auth::user()->id) {
        //  $cartItems = Cart::getContent();
        // $cartItems= Cart::where('id_user',auth()->user()->id)->get();

        // dd($cartItems);$array = Arr::add(['name' => 'Desk'], 'price', 100);

        $cartItems = DB::table('carts')->get();
        $getTotalPrices=DB::table('carts')->where('user_id', '=',Auth::user()->id)->count('price');
        $settings=DB::table('carts')->where('user_id', '=',Auth::user()->id)->sum('price');
        $getTotalItem=DB::table('carts')->where('user_id', '=',Auth::user()->id)->count('price');
        return view('cart', compact('cartItems'))->with('settings',$settings)->with('getTotalItem',$getTotalItem);


    // }




}


    public function productList()
    {
        // dd($cartItems);
        $products = DB::table('products')->get();

        return view('layouts.products', compact('products'));
    }


    public function addToCart(Request $request)
    {


        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'user_id' => Auth::user()->id,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        // $request->session()->push( 'user_id',Auth::user()->id);
        // Session::put('user_id', Auth::user()->id);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        // $totalprice=Cart::getTotal() ;
        // session(['key' => $totalprice]);

        $request->session()->put('id_product',  $request->id);
        $request->session()->put('name_product',  $request->name);
        $request->session()->put('price_product', $request->price);
        $request->session()->put('quantity_product', $request->quantity);
        $request->session()->put('user_id', Auth::user()->id);
        $request->session()->put('image_product',  $request->image);
        // 'id' => $request->id=session(['product_id']),
        // 'name' => $request->name=session(['product_name']),
        // 'price' => $request->price=session(['product_price']),
        // 'quantity' => $request->quantity=session(['product_quantity']),
        // 'user_id' => Auth::user()->id=session(['Auth_user_id']),
        // 'attributes' => array(
        //     'image' => $request->image=session(['image_product_id'])

        return redirect()->route('cart.cartStore');
    }

    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.cartStore');
    }







    public function removeCart(Request $request,$id)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully');

        DB::table('carts')->where('products_id', '=', $id)->delete();

        return redirect()->route('cart.list');
    }






    public function clearAllCart($id)
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');
        DB::table('carts')->where('user_id', '=', $id)->delete();

        return redirect()->route('cart.list');
    }

    // public function getTotalPrice(Request $request)
    // {

    //    $settings=DB::table('carts')->where('user_id', '=',Auth::user()->id)->sum('price');


    // //    return  route('cart.list') ;
    // return view('cart.list',['settingsss'=>$settings]);

    // //    $request->session()->put('getTotalPrices',$getTotalPrices);
    // //    return route('cart.list');

    // }

    // public function getTotalItem()
    // {

    //     $cartItems = DB::table('carts')->get();
    //     $getTotalItem=DB::table('carts')->where('user_id', '=',Auth::user()->id)->count('price');
    //     return view('layouts.frontend', compact('cartItems'))->with('getTotalItem',$getTotalItem);


    // //    $getTotalItem=DB::table('carts')->where('user_id', '=',Auth::user()->id)->count('price');
    //    return view('cart')->with('getTotalItem',$getTotalItem);

    // }

}
