<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Auth;
use Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');  //megjeleníti az űrlapot
    }

    public function store(Request $request) {
        $request->validate([
            'user_name' => 'required|string|min:2|max:255',
            'email_address' => 'required|email|max:255|unique:users',
            'pwd' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
           'user_name' => $request->name,
           'email_address' => $request->email,
           'pwd' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended();
    }
}
