<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function front_dashboard()
    {
        return view('front.index');
    }
    public function index()
    {
        return view('front.dashboard.index');
    }

    
}
