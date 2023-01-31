<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    //
    protected function index(Request $request){
        return view('back.pages.home');
    }
}
