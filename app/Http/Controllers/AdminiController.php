<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminiController extends Controller

{

    public function A(){
        return view('profile.connexion');
    }

    public function B(){
        return view('profile.inscription');
    }
    //
}
