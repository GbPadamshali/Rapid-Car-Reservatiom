<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Helpers\Utils;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myHome()
    {
        return view('myHome');
    }

    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */
    public function myUsers()
    {
        return view('myUsers');
    }

    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function log_in(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|string|max:255',
            'password' => 'required|string',
        ], [
            'email.required' => 'Email address is required',
            'password.required' => 'Password is required',
        ]);

        session()->flush();
        Log::debug($req->input('email'));
        Log::debug($req);

        return redirect()->to('/register');
    }
}
