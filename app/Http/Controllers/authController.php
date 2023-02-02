<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    //
    protected function index(Request $request){
        return view('back.pages.home');
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('author.login');
    }
}
