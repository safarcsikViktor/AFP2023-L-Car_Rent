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
        }// ez eddig egy próbálkozás, ha nem megy ,akkor hibaüzenet
        $request->session()->regenerate(); //belépés
        return redirect()->intended(); // átdonjuk oda aholl volt
    }

    public function destroy(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
