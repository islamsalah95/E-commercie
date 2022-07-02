<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllerAdminstation extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:adminstration');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homeAdminstration');
    }
}
