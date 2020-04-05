<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Add;
use App\Http\Controllers\Controller;
use DB;

use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryController extends Controller
{
    public function  index()
    {
        if(session()->has('success_message')){
         Alert::success('', session()->get('success_message'));
        }
        return view('admin.add_category');
    }
    public function  all_categories()
    {
        $all_categories=DB::table('category')->get();
        $manage_category=view('admin.all_categories')->with('all_categories',$all_categories);

         return view('admin_layout')->with('admin.all_categories',$manage_category);


        //return view('admin.all_categories');
    }
    public function  save_categories(Request $request)
    {
        $data=array();
        $data['category_id']=$request->category_id;
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->publication_status;
        if($request->publication_status!=1)
        {
            $data['publication_status']=0;
        }
        DB::table('category')->insert($data);
        return Redirect::to('/add_category')->withSuccessMessage('Category added successfullly!!');

    }
   /* public function in_active($category_id)
    {
        DB::table('category')->where('category_id',$category_id)->update(['publication_status' => 0]);
        return Redirect::to('all_categories');
    }
    public function active($category_id)
    {
        DB::table('category')->where('category_id',$category_id)->update(['publication_status' => 1]);
        return Redirect::to('all_categories');
    }
    */
}
