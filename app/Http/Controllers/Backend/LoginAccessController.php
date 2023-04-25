<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Helpers\helper;
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

    public function VerifyUser(Request $req){
         $validator = $req->validate([
               'phone' => 'required|numeric|digits:11',
               'password' => 'required',
           ]);
           $phone = $req->phone;
           $password = $req->password;
           $verify_user = helper::ValidateUser($phone);
        if($verify_user === 'Not-allowed'){
            return redirect()->route('log.in')->with('failed','দুঃখিত, আপনার ফোন নাম্বার সঠিক নয়।');
        }else{

        }
    }

    public function Register(){
        return view('frontend.pages.auth.login-register.register');
    }

    public function StoreUser(Request $req){
         $email = $req->email;
         if(!empty($email)){
            $validator = $req->validate([
               'phone' => 'required|unique:users,phone|numeric|digits:11',
               'email' => 'email:rfc,dns'
           ]);
         }else{
            $validator = $req->validate([
               'phone' => 'required|unique:users,phone|numeric|digits:11',
           ]);
         }
           $name = $req->name;
           $phone = $req->phone;
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
