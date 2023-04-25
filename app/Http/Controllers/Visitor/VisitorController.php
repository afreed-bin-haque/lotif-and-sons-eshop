<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisitorGroceryListUpload;
use Intervention\Image\Facades\Image As IMG;
use Haruncpi\LaravelIdGenerator\IdGenerator As IDGen;
use Carbon\Carbon;

class VisitorController extends Controller
{
    public function ViewUploadList(){
         return view('frontend.pages.website.upload-list');
    }

    public function StoreGroceryList(Request $req){
        $validator = $req->validate([
               'phone' => 'required|numeric|digits:11',
               'address' => 'required|max:500',
               'zone' => 'required',
           ]);
        $phone = $req->phone;
        $address = $req->address;
        $zone = $req->zone;
        $main_image = $req->main_image;
        $current_date = Carbon::now()->format('d/m/Y');
        $serial = IDGen::generate(['table' => 'visitor_grocery_list_uploads', 'field' => 'serial', 'length' => 10, 'prefix' => 'VGL-']);
        if(!empty($main_image)){
            $file_name_gen = hexdec(uniqid()).'.'. $main_image->getClientOriginalExtension();
            IMG::make($main_image)->resize(600,800)->save('public/assets/img/visitor_grocery_list/'.$file_name_gen);
            $final_visitor_grocery_list = '/public/assets/img/visitor_grocery_list/'.$file_name_gen;
        }else{
            $final_visitor_grocery_list = NULL;
        }

        $submit_list = new VisitorGroceryListUpload();
        $submit_list->serial = $serial;
        $submit_list->main_img = $final_visitor_grocery_list;
        $submit_list->phone = $phone;
        $submit_list->address = $address;
        $submit_list->zone = $zone;
        $submit_list->date = $current_date;
        $submit_list->payment_status = 'Unpaid';
        $submit_list->created_at = Carbon::now();
        $submit_list->save();
        return redirect()->route('welcome')->with('success','ধন্যবাদ আমরা আপনার গ্রোসারি লিস্ট পেয়েছি, অতি দ্রুত আপনার লিস্টটি প্রসেস করা হবে।আপনার লিস্ট সিরিয়ালঃ'.$serial);
    }
}
