<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Mail;
use App\Mail\ResetpasswordMail;
use App\Models\User;



class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function password_reset(Request $request){

        $request->validate([
            'email'=>'required|email|exists:users,email'
        ]);

        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
            'email'=>$request->email,
            'remember_token'=>$token,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        $action_link = route('password.showForm',['remember_token'=>$token,'email'=>$request->email]);
        $body = "We are received a request to reset the password for Your DayOutIn  account associated with ".$request->email.". You can reset your password by clicking the button below";
        $mailData = [
            'title' => 'Mail from DayOutIn',
            'body' => "$body",
            'link' => "$action_link"
        ];
        Mail::to($request->email)->send(new ResetpasswordMail($mailData));
      return back()->with('success', 'We have e-mailed your password reset link!');

      }
    public function Show_reset_form(Request $request, $token = null){
        return view('auth.passwords.resetform')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function Change_password(Request $request){

        // dd($request);
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);
        // dd($request);
        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'remember_token'=>$request->token2,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{

            User::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('login')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
        }

    }



}
