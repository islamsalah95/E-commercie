<?php

namespace App\Http\Controllers\authAdminstaration;
use App\Mail\ResetPassowrd;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Traits\GenerateCode;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    use GenerateCode;
    use SendsPasswordResetEmails;
    public function showLinkRequestForm()
    {
        return view('authAdminstaration.passwords.email');
    }
    public function broker()
    {
        return Password::broker('adminstration');
    }

    public function view(){
        return view('authAdminstaration/passwords/chickCode');

    }


    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        // $response = $this->broker()->sendResetLink(
        //     $this->credentials($request)
        // );

        // return $response == Password::RESET_LINK_SENT
        //             ? $this->sendResetLinkResponse($request, $response)
        //             : $this->sendResetLinkFailedResponse($request, $response);


$emails=DB::table('adminstrations')->select('email')->get();

foreach ($emails as $email) {
    if ($email->email==$request->email) {
$code=$this->newCode();
Mail::to($request->email)->send(new ResetPassowrd($code));
DB::table('saveCodes')->insert([
    'code'=> $code,
    'email'=>$request->email
]);
return redirect(route('view'));
}


}

return " register first ";

    }





    public function chickCodeRight(Request $request)
    {

        $request->validate([
            'code' => 'required|max:255',
        ]);

        $latestCodes=DB::table('savecodes')->orderBy('created_at', 'asc')->limit(1)->get();

foreach ($latestCodes as $latestCode) {
    if ($request->code===$latestCode->code) {

return view('authAdminstaration/passwords/updatePass',['email'=>$latestCode->email]);

    }

}


    }






    public function updatePass(Request $request,$email)
    {

        // $request->validate([
        //     'password' => 'password'
        //         ]);

    $latestCodes=DB::table('savecodes')->where('email','=',$email)->orderBy('created_at', 'asc')->limit(1)->get();

    foreach ($latestCodes as $latestCode) {

       $A= DB::table('adminstrations')->where('email','=',$latestCode->email)->update([
        'password' =>Hash::make($request->password)

        // Hash::make($request->newPassword)
            ]);


        }

DB::table('savecodes')->where('email','=',$email)->delete();

return view('authAdminstaration.login');

    }












}
