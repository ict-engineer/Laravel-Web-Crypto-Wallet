<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->input('pagename'));
        return view('business.Dashboard', ['pagename'=>'dashboard']);  
    }
}
