<?php


namespace App\Http\Middleware;

use Closure;


class AdminAuthenticate{



    public function handle($request, closure $next)
    {
        if(!$request->session()->has('adminusername'))
        {
        	// dd($request->session()->all());
            return view('Admin.Sign.sign');
        }
        return $next($request);
    }
}