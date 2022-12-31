<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function register(Request $request) {

        $this->validate($request, [
            'firstname'=>'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'phone'=>'required|min:11',
            'address'=>'required|string',
            'password'=>'required|confirmed'
        ]);

        $user = User::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>Hash::make($request->password)
        ]);

        event(new Registered($user));

        auth()->attempt($request->only(['email', 'password']));

        return redirect()->route('dashboard');
    }

    public function verifyEmail(EmailVerificationRequest $request){

        $request->fulfill();

        return redirect()->route('dashboard');
    }

    public function resendEmailVerification(Request $request){

        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link resent!');
    }
}
