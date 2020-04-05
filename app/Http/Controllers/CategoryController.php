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
        return view('admin.all_categories');
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
}
