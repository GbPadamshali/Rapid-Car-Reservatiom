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
use Twilio\Rest\Client;


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
    function generateNumericOTP($n) {
      $generator = "1357902468";
      $result = "";
      for ($i = 1; $i <= $n; $i++) {
          $result .= substr($generator, (rand()%(strlen($generator))), 1);
      }
      return $result;
    }

    public function send_opt(Request $request){

      $otp = self::generateNumericOTP(4);
       try {
          $receiverNumber = "+917567434957";
          $account_sid = "ACfeb8f4d177d9d236b6232034a3503722";
          $auth_token = "b80cb0abf8ee2952ff246f6d10966b6c";
          $twilio_number = "+917567434957";//"+15558675310";

          $client = new Client($account_sid, $auth_token);
          /*$client->messages->create($receiverNumber, [
              'from' => "+17146042499", 
              'body' => $otp]);*/
          User::where('id',\Auth::user()->id)->update(['otp' => $otp ]);
          $arr = array("status" => 200, "msg" => 'OTP has been sent successfully.', "result" => array());
      } catch (\Illuminate\Database\QueryException $ex) {
          $msg = 'oops!Something went wrong';
          if (isset($ex->errorInfo[2])) {
              $msg = $ex->errorInfo[2];
          }
          $arr = array("status" => 400, "msg" => $msg, "result" => array());
      }
      return \Response::json($arr);
    }

    public function verify_otp(Request $request){
       try {
          $user = User::where('id',\Auth::user()->id)->first();
          if($request->otp == $user->otp){
            User::where('id',\Auth::user()->id)->update(['phone_verified'=>"1"]);
            $arr = array("status" => 200, "msg" =>"Verified successfully", "result" => array());
          }else{
            $arr = array("status" => 400, "msg" => "Invalid otp.", "result" => array());
          }
      } catch (\Illuminate\Database\QueryException $ex) {
          $msg = 'oops!Something went wrong';
          if (isset($ex->errorInfo[2])) {
              $msg = $ex->errorInfo[2];
          }
          $arr = array("status" => 400, "msg" => $msg, "result" => array());
      }
      return \Response::json($arr);
    }
}
