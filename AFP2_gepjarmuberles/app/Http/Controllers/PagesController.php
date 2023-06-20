<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome() {
        return view('home');
    }

    public function getCars() {
        return view('cars');
    }

    public function getProfile() {
        return view('profile');
    }

    public function getRentACar() {
        return view('rentacar');
    }

}
