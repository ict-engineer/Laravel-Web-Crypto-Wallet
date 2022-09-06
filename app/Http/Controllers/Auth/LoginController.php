<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\User;


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


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.AdminLogin');
    }
    protected function redirectTo()
    {
        // dd(Auth::user()->hasPermissionTo('Access Admin'));
        // return 'admin';
        if(Auth::user()->hasRole('Admin'))
        {
            // dd("Admin");
            return 'admin';
        }
        else if(Auth::user()->hasRole('Business'))
        {
            // dd("home");
            return 'business/dashboard';
        }
        else if(Auth::user()->hasRole('User'))
        {
            // dd("User");
            return 'personal/dashboard';
        }
    }

}
