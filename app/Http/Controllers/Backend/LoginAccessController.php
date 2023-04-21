<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LoginAccessController extends Controller
{
    public function ViewLoginPage(){
        return view('frontend.pages.auth.login-register.login');
    }

    public function Register(){
        return view('frontend.pages.auth.login-register.register');
    }

    public function StoreUser(Request $req){
         $validator = $req->validate([
               'phone' => 'required|unique:users,phone|numeric|digits:11',
               'email' => 'email:rfc,dns'
           ]);
    }
}
