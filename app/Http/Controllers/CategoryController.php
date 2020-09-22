<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryController extends Controller
{
       public function index()
   {

   	return view('welcome');
   }

      public function view_category()
   {

   	return view('add_category');
   }

      public function save_category(Request $request)
   {
      $data=array();
   	 $data['category_id']=$request->category_id;
     $data['category_name']=$request->category_name;
     $data['status']=$request->status;
       DB::table('Category')->insert($data);
        Session::put('messege','Category added successfully !!');
        return Redirect::to('/add-category');
   }

      public function all_category()
   {
     
     $all_category_info=DB::table('Category')->get();

        $manage_category=view('all_category')
         ->with('all_category_info',$all_category_info);

         return view('welcome')
         ->with('all_category',$manage_category);

        

   }

   public function delete_category($category_id)
{

   DB::table('Category')
   ->where('category_id',$category_id)
   ->delete();
   Session::put('messege','Category deleted successfully !!');
   return Redirect::to('/all-category');
}

}