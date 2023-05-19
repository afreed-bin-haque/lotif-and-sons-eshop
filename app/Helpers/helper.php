<?php

namespace App\Helpers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class helper{
    public static function ValidateUser($phone){
        $verify_user_is_admin = Admin::where('phone',$phone)->exists();
        $verify_user_is_user = User::where('phone',$phone)->exists();
        if($verify_user_is_admin === true){
            $fetch_path = Admin::where('phone',$phone)->take(1)->get();
            foreach ($fetch_path as $user_path) {
                $main_path = $user_path->path;
            }
        }elseif($verify_user_is_user === true){
            $fetch_path = User::where('phone',$phone)->take(1)->get();
            foreach ($fetch_path as $user_path) {
                $main_path = $user_path->path;
            }
        }else{
            $main_path = 'Not-allowed';
        }
        return $main_path;
    }

    public static function ValidatePassword($phone,$password){
        $verify_user_is_admin = Admin::where('phone',$phone)->exists();
        $verify_user_is_user = User::where('phone',$phone)->exists();
        if($verify_user_is_admin === true){
            $fetch_path = Admin::where('phone',$phone)->take(1)->get();
            foreach ($fetch_path as $user_path) {
                $set_password = $user_path->password;
            }
            if(Hash::check($password,$set_password)){
                $password_validate = 'Allowed';
            }else{
                $password_validate = 'Not-allowed';
            }
        }elseif($verify_user_is_user === true){
            $fetch_path = User::where('phone',$phone)->take(1)->get();
            foreach ($fetch_path as $user_path) {
                $set_password = $user_path->password;
            }
            if(Hash::check($password,$set_password)){
                $password_validate = 'Allowed';
            }else{
                $password_validate = 'Not-allowed';
            }
        }else{
            $password_validate = 'Not-allowed';
        }
        return $password_validate;
    }

    /* Access token generate */
    public static function AccessToken($phone){
        $random_sting_gen = Str::random(60).uniqid().md5($phone);
        $time_stamp =  str_replace(' ', '',Carbon::now());
        $final_token = md5($random_sting_gen).$time_stamp;
        return $random_sting_gen;
    }
}
