<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Validation extends Controller
{

    public function validation (Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required','numeric']);

            if( $validator->fails()){
             return  redirect()->back()->withErrors($validator);
            }

            else{
                return redirect()->back()->with([
                    "success"=>"add successful"
              ]);
            }

   }


}
