<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage(){
        return view('sign_in');
    }

    public function getLecturer(){
        return view('lecturer');
     }

     public function getRegister(){
        return view('register');
     }


}
