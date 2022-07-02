<?php
namespace App\Http\Controllers;

use Cart;

use Stripe;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class StripePaymentController extends Controller

{

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */




    public function stripe()

    {

        return view('stripe');

    }

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripePost(Request $request)

    {

        $settings=DB::table('carts')->where('user_id', '=',Auth::user()->id)->sum('price');
        $carts=DB::table('carts')->where('user_id', '=',Auth::user()->id)->get();



        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([

                "amount" => $settings*100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Test payment from itsolutionstuff.com."

        ]);


        Session::flash('success', 'Payment successful!');



        // return  $request->session()->all() ;
        // back();

        // $request->session()->flush();

        if (session()->has('success')) {
            foreach ($carts as $cart) {

                DB::table('orders')->insert([
                'item_price' =>$cart->price,
                'username'=>Auth::user()->name,
                'user_id'=>Auth::user()->id,
                'cartSize'=>$cart->cartSize,

                 ]);


                 DB::table('products')->where('id','=',$cart->products_id)->decrement($cart->cartSize,1);


                }
            Cart::clear();
            DB::table('carts')->where('user_id', '=',Auth::user()->id)->delete();

        }


            // Session::flash('success', 'Payment successful!');

            return redirect()->back()->with('success', 'Payment is successful!');

    }


}
