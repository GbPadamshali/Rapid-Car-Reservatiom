<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerifyMail;


class PublicAccessController extends Controller
{
    public function verifyUser($token)
    {
      $verifyUser = User::where('token', $token)->first();
      if(isset($verifyUser) ){
        $user = $verifyUser;
        if(!$user->verified) {
          $verifyUser->token = '';
          $verifyUser->verified = 1;
          $verifyUser->save();
          $status = "Your e-mail is verified. You can now login.";
        } else {
          $status = "Your e-mail is already verified. You can now login.";
        }
      } else {
        return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
      }
      return redirect('/login')->with('status', $status);
    }

    public  function resend_mail(){
        $user_data = User::find(\Auth::user()->id);
        $user_data->token = sha1(time());
        $user_data->save();
        $user = User::find(\Auth::user()->id);
        \Mail::to($user->email)->send(new VerifyMail($user));
        return array('status'=>200 , 'data' => []);
        
    }
}
