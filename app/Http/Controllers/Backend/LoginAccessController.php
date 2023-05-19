<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Helpers\helper;
use Illuminate\Http\Request;
use Session;
use Haruncpi\LaravelIdGenerator\IdGenerator As IDGen;
use App\Models\Admin;
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
        $verify_password = helper::ValidatePassword($phone,$password);
        if($verify_user === 'Not-allowed'){
            return redirect()->route('log.in')->with('failed','দুঃখিত, আপনার ফোন নাম্বার সঠিক নয়।');
        }elseif($verify_password === 'Not-allowed'){
            return redirect()->route('log.in',['phone'=>$phone])->with('failed','দুঃখিত, আপনি ভুল পাসওয়ার্ড দিয়েছেন। সঠিক পাসওয়ার্ড দিন।');
        }elseif($verify_password === 'Allowed'){
            if($verify_user === 'Admin'){
                $generate_access = helper::AccessToken($phone);
                $save_access_token = Admin::where('phone',$phone)->update([
                    'access_token' => $generate_access,
                    'updated_at' => Carbon::now()
                ]);
                $fetch_details = Admin::where('phone',$phone)->take(1)->get();
                foreach($fetch_details as $admin_details){
                    $old_password = $admin_details->password;
                    $access_token = $admin_details->access_token;
                    $path = $admin_details->path;
                }
                if(Hash::check($password,$old_password)){
                    Session::put([
                     'path' => $path,
                     'access_token' => $access_token,
                    ]);
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('log.in',['phone'=>$phone])->with('failed','দুঃখিত, আপনার প্রদত্ত তথ্য সঠিক নয়');
                }
            }elseif($verify_user === 'User'){
                $generate_access = helper::AccessToken($phone);
                $save_access_token = User::where('phone',$phone)->update([
                    'access_token' => $generate_access,
                    'updated_at' => Carbon::now()
                ]);
                $fetch_details = User::where('phone',$phone)->take(1)->get();
                foreach($fetch_details as $user_details){
                    $old_password = $user_details->password;
                    $access_token = $user_details->access_token;
                    $path = $user_details->path;
                }
                if(Hash::check($password,$old_password)){
                    Session::put([
                     'path' => $path,
                     'access_token' => $access_token,
                    ]);
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('log.in',['phone'=>$phone])->with('failed','দুঃখিত, আপনার প্রদত্ত তথ্য সঠিক নয়');
                }
            }
        }else{
            return redirect()->route('log.in',['phone'=>$phone])->with('failed','দুঃখিত, আপনি ভুল পাসওয়ার্ড দিয়েছেন। সঠিক পাসওয়ার্ড দিন।');
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
