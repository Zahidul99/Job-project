<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CustomerController extends Controller
{
       public function index()
   {

   	return view('add_customer');

   }
   public function save_customer(Request $request)
    {

       $data=array();
       $data['customer_name']=$request->customer_name;
       $data['customer_id']=$request->customer_id;
       $data['customer_email']=$request->customer_email;
       $data['customer_mobile']=$request->customer_mobile;
       
       $image=$request->file('customer_image');

       if ($image) {
       	$image_name=str::random(20);
       	$ext=strtolower($image->getClientOriginalExtension());
       	$image_full_name=$image_name.'.'.$ext;
       	$upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if ($success) {
        	$data['customer_image']=$image_url;

               	DB::table('Customer')->insert($data);
               	Session::put('messege','Customer added successfully!!');
               	return Redirect::to('/add-customer');

               	}       	
       }
                
          $data['customer_image']='';
          DB::table('Customer')->insert($data);

          Session::put('messege','Customer added successfully without image!!');
               	return Redirect::to('/add-customer');

    }
    public function all_customer()
    {

 

        $all_customer_info=DB::table('Customer')->get();

        $manage_customer=view('all_customer')
         ->with('all_customer_info',$all_customer_info);

         return view('welcome')
         ->with('all_customer',$manage_customer);

         

    }

 
  
}
