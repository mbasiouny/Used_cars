<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Closure;
use App\User;

use Sentinel;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getLogin()
    {
      if(\Auth::check()){
        return redirect()->back();
      }
      else {
        return view('auth.login');
      }
    }
    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(\Auth::attempt(['email'=>$email,'password'=>$password])){
          if(\Auth::user()->role==0){
                  // return \Auth::user()->role;
                  return redirect(route('dashAdmin'));
                }
                // role 1 for user
                else{
                    // return \Auth::user()->role;
                    return redirect(route('welcomePage'));
                }
        }
        else{
            if(\Auth::check()){
              return redirect()->back();
            }
            else {
              return redirect(route('get.login'));
            }

        }
    }
    


}
