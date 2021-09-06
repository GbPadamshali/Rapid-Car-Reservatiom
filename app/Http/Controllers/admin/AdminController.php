<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function login()
    {
        Log::debug('login');
        return view('admin.auth.login');
    }

    public function log_in(Request $req)
    {
        // dd($req->request);
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $req->only('email', 'password');
        $credentials['role_id'] = '1';
        if (Auth::attempt($credentials)) {
            // Log::debug('dologin');
            return redirect()->route('admin.dashboard')->with('success', 'You have Successfully loggedin.');
        } else {
            // Log::debug('login');
            return redirect()->back()->with('error', 'Login details are not valid');
        }
    }

    public function forgot()
    {
        return view('admin.auth.forgot');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect('login');
    }
}
