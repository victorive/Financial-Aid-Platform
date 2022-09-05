<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        User::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>Hash::make($request->password)
        ]);

        auth()->attempt($request->only(['email', 'password']));

        return redirect()->route('dashboard');
    }
}
