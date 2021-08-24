<?php

namespace admin;

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        return view('register');
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        // auth()->login($user);
        return redirect()->to('/dashboard');
    }
    public function login()
    {
        Log::debug('Hello');
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
        Log::debug($req);

        return redirect()->to('/register');
    }
}
