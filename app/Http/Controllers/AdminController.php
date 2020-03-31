<?php

namespace App\Http\Controllers;
use App\Add;
use Illuminate\Http\Request;
use DB;
//use App\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{

    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
      if(\Auth::check()){
        if(\Auth::user()->role==0)
          return view('admin.dashboard');
      }

    }

    public function add_car(Request $request )
    {
        if($request->isMethod('post')){
            $newcar= new Add();
            $newcar->email=$request->input('email');
            $newcar->model=$request->input('model');
            $newcar->years=$request->input('years');
            $newcar->description=$request->input('description');
            $newcar->price=$request->input('price');
            $newcar->photo=$request->input('photo');
            $newcar->save();
        }
        return view('admin_add');

    }
}
