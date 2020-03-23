<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Http\Requests;
use Session;
Session_start();

class SuperAdminController extends Controller
{
    //
    public function logout(){
        // Session::put('email','null');
        // Session::put('password','null');
        if(\Auth::check()){
          \Auth::logout();
          return redirect(route('login'));
        }
        else abort('404');

    }
    //For edit My account
    public function demo()
    {
      $value = 'testing value1';
      $value2 = 'testing vlaue 2';
      $user  = \Auth::user();
      $username = $user->name;
      $lastname = $user->lastname;
      $testingArray = array(1,2,3,4);
      // to pass those vlaue to any view you want jsut use function compact
      return view('viewname',compact('value','value2','user','username','lastname','testingArray'));
      // in the view you can access those value directly like
      // <h1>the usename is {{$value}}</h1>
      // <p>the username is {{$user->name}} or {{$username}}</p>
      // the array value can be accessed like that {{$array[0]}}
    }
}
