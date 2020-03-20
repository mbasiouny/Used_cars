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
            
            if(\Auth::check())
             {
                 // role 0 for admin
                if(\Auth::user()->role==0){
                    return route('dash');
                }
                // role 1 for user
                else{
                    return route('home');
                }
             }
        }
    }
}
