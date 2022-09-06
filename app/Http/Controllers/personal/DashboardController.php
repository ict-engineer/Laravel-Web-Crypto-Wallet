<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->input('pagename'));
        return view('personal.Dashboard', ['pagename'=>'dashboard']);  
    }
}
