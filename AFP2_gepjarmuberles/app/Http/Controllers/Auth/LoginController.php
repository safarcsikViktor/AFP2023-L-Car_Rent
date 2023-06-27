<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $credentials = $request->only('email_address', 'pwd');
        if (!Auth::attempt($credentials, $request->filled('remember_me'))) {
            throw ValidationException::withMessages([
                'email_address' => __('auth.failed')
            ]);
        }
        $request->session()->regenerate();
        return redirect()->intended();
    }


}
