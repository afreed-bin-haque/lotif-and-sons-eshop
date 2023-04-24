<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function ViewUploadList(){
         return view('frontend.pages.website.upload-list');
    }
}
