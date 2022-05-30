<?php

namespace App\Http\Controllers\Offers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public $module_view_folder;

    public function __construct()
    {
        $this->module_view_folder = 'front.offers';
    }

    public function index()
    {

        $offers = DB::table('products')->get();

        return view('front.offers.index',compact('offers')) ;
    }

    public function show($offer_id)
    {
        $offer =  DB::table('products')->where('id',$offer_id)->get();

        if (request('id') && request('resourcePath')) {
             $payment_status = $this->getPaymentStatus(request('id'), request('resourcePath'));
              if (isset($payment_status['id'])) { //success payment id -> transaction bank id
                  $showSuccessPaymentMessage = true;

                  //save order in orders table with transaction id  = $payment_status['id']
                return view('front.offers.details',compact('offer'))-> with(['success' =>  'تم الدفغ بنجاح']);
            } else {
                $showFailPaymentMessage = true;
                 return view('front.offers.details',compact('offer'))-> with(['fail'  => 'فشلت عملية الدفع']);
            }

        }
        return view('front.offers.details',compact('offer'));
    }

    private function getPaymentStatus($id, $resourcepath)
    {
        $url = config('payment.hyperpay.url');
        $url .= $resourcepath;
        $url .= "?entityId=" . config('payment.hyperpay.entity_id');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer ' . config('payment.hyperpay.auth_key')));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, config('payment.hyperpay.production'));// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return json_decode($responseData, true);

    }

}
