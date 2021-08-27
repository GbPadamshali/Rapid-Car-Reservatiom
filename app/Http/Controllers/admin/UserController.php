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
        return view('admin.users.login');
    }
    public function log_in(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        // {
        //     $user = auth()->guard('admin')->user();

        //     \Session::put('success','You are Login successfully!!');
        //     return redirect()->route('dashboard');

        // } else {
        //     return back()->with('error','your username and password are wrong.');
        // }

        $user = User::where('email', $req->input('email'))->first();
        if (empty($user))  return redirect()->back()->with('error', 'Invalid login details.');

        if (!Hash::check($req->input('password'), $user->password)) {
            return redirect()->back()->with('error', 'Invalid login details.');
        } else {
            Session::push('id', $user->id);
            return redirect()->route('dashboard')->with('success', 'You have Successfully loggedin.');
        }
    }
    public function forgot()
    {
        return view('admin.users.forgot');
    }

    public function logout()
    {
        // auth()->guard('admin')->logout();
        // \Session::flush();
        // \Sessioin::put('success', 'You are logout successfully');
        // return redirect(route('login'));
    }
}
