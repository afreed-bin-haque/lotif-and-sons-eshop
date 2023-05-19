<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class BackendPageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('frontend.pages.auth.dashboard.dashboard');
    }

    /* Helper function */
    public function MainGridLoader(){
        $path = Session::get('path');
        if($path === 'Admin'){
            return response()->json([
                'html' => 'ffewfknwlfknwlf'
            ]);
        }
    }
}
