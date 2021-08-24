<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function create()
    {
        return view('admin.register');
    }
    public function store(Request $req)
    {
        $this->validate($req, [
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
        return view('admin.login');
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

        $user = User::where('email', $req->input('email'))->first();
        if (empty($user)) Log::debug("Invalid login details");

        if (!Hash::check($req->input('password'), $user->password)) {
            Log::debug("Invalid login details");
        } else {
            Session::push('id', $user->id);
            return redirect()->to('/dashboard')->withSuccess('You have Successfully loggedin');;
        }
    }
    public function forgot()
    {
        return view('admin.forgot');
    }
}
