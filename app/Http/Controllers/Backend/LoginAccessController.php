<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Haruncpi\LaravelIdGenerator\IdGenerator As IDGen;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
           $name = $req->name;
           $phone = $req->phone;
           $email = $req->email;
           $password = $req->password;

           $serial =IDGen::generate(['table' => 'users', 'field' => 'serial', 'length' => 15, 'prefix' => 'usr-']);
           $save_user = new User();
           $save_user->serial = $serial;
           $save_user->name = Str::ucfirst($name);
           $save_user->phone = $phone;
           $save_user->email  = $email;
           $save_user->password  = Hash::make($password);
           $save_user->path ='User';
           $save_user->save();
           return redirect()->route('log.in')->with('success','আপনার প্রোফাইল রেজিস্ট্রেশন সাকসেসফুল।এখানে লগইন করুন');
    }
}
