<?php

namespace App\Helpers;
use App\Models\Admin;
use App\Models\User;

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
}
