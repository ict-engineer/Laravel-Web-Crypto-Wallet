<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;

class RedirectIfAuthenticated
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = User::find(Auth::user()->id);
   
            if($user->hasRole('Admin'))
            {
                return redirect(RouteServiceProvider::ADMIN);
            }
            else if($user->hasRole('Business'))
            {
                return redirect(RouteServiceProvider::BUSINESS);
            }
            else if($user->hasRole('USER'))
            {
                return redirect(RouteServiceProvider::USER);
            }
        }
        else{
            // dd($request->get('pathInfo'));
            // dd($request->pathInfo);
            // $n_bandera = $requestData['pathInfo'];
            // dd($requestData);

        }

        return $next($request);
    }
}
