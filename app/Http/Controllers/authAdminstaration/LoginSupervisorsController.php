<?php

namespace App\Http\Controllers\authAdminstaration;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginSupervisorsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public const HOME = '/home/adminstration';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('adminstration');
    }

    public function showLoginForm()
    {
        return view('authAdminstaration.loginSupervisors');
    }

    // public function login(Request $request)
    // {
    //     $this->validateLogin($request);

    //     // If the class is using the ThrottlesLogins trait, we can automatically throttle
    //     // the login attempts for this application. We'll key this by the username and
    //     // the IP address of the client making these requests into this application.
    //     if (method_exists($this, 'hasTooManyLoginAttempts') &&
    //         $this->hasTooManyLoginAttempts($request)) {
    //         $this->fireLockoutEvent($request);

    //     }

    //     return Auth::user()->name;

    // }

    public function login(Request $request)
    {$this->validateLogin($request);
        $credentials = $request->only('email', 'password');

        if (Auth::guard('supervisor')->attempt($credentials)) {
            // Authentication passed...
            return redirect(route('dash'));
            // return true;
        }

        else {
            return view('page404',['message'=>'you are not register']);
        }
    }

    public function logout(Request $request)
    {
        $this->guard('supervisor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return view('authAdminstaration.loginSupervisors');
    }
}
