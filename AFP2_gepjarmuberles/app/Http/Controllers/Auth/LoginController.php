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
        $request->validate([
            'user_name' => 'required|string|min:2|max:255',
            'email_address' => 'required|email|max:255|unique:users',  //validálás
            'pwd' => 'required|min:8|confirmed'
        ]);

        $user = User::create([  // létrehozzuk a felhasználót, átadom a tömböt
           'user_name' => $request->name,
           'email_address' => $request->email,
           'pwd' => Hash::make($request->password)// elheselem a jelszót, a hash osztály make metódusával
        ]);

        event(new Registered($user)); //regisztrálom az új usert, nem fontos, de ha valaki regisztrál, köthetünk hozzá üdvözlő szöveget

        Auth::login($user);// ha már bereggelt, maradjon is bejelentkezve

        return redirect()->intended(); //ha megvan a reg akkor oda rak, ahol belefutottam a reg hiányába
    }
}
