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

}
