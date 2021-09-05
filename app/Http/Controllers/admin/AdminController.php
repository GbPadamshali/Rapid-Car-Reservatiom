<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function login()
    {
        Log::debug('login');
        return view('admin.auth.login');
    }

    public function log_in(Request $req)
    {
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('username', 'password');
        if (Auth::attempt($credentials)) {
            Log::debug('dologin');
            return redirect()->route('dashboard')->with('success', 'You have Successfully loggedin.');
        } else {
            Log::debug('login');
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
