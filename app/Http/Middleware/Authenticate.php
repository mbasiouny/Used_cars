<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
          return route('get.login');
          // return \Auth::user()->role;
          //   if(\Auth::check())
          //    {
          //        // role 0 for admin
          //       if(\Auth::user()->role==0){
          //
          //             return \Auth::user()->role;
          //       }
          //       // role 1 for user
          //       else{
          //         return \Auth::user()->role;
          //           return route('welcomePage');
          //       }
          //    }
        }
    }
}
