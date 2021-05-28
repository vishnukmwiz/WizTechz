<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('LoggedUser') && ($request->path() !='Auth/Login' && $request->path() !='Auth/Register' && $request->path() !='Auth/Home' && $request->path() !='Auth/ProductList' && $request->path() !='Auth/ProductDetails')){
            return redirect('Auth/Login')->with('fail','You must be logged in');
        }

        
            if(session()->has('LoggedUser') && ($request->path() == 'Auth/Login' ) ){
                return redirect('User/Home');
            }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/Register' ) ){
                return redirect('User/Home');
            }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/Home' ) ){
                return redirect('User/Home');
            }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/ProductDetails' ) ){
                return redirect('User/ProductDetails');
            }elseif(session()->has('LoggedUser') && ($request->path() == 'Auth/ProductList' ) ){
                return redirect('User/ProductList');
            }else{
            }
        
        
        
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
