<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('admin.users.register');
    }
    public function store(Request $req)
    {
        $req->validate($req, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required'
        ]);

        $user = new User;
        $user->fill($req->all());
        $user->password = Hash::make($user->password);
        $user->save();

        // auth()->login($user);
        Log::debug($user);
        return redirect()->to('/dashboard');
    }

    public function login()
    {
        Log::debug('login');
        return view('admin.users.login');
    }

    public function log_in(Request $req)
    {

        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        Log::debug('dologin');

        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'You have Successfully loggedin.');
        } else {
            return redirect()->back()->with('error', 'Login details are not valid');
        }
    }

    public function forgot()
    {
        return view('admin.users.forgot');
    }

    public function logout()
    {
        // Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
