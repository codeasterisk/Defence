<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->role == '1' && Auth::user()->status == '1')
            return redirect('/dashboard');
        elseif (Auth::user()->role == '2' && Auth::user()->status == '1')
            return redirect('/editors');
        else
            return redirect('/');
    }
}
