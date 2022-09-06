<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntegrateController extends Controller
{
    public function index()
    {
        return view('business.Integrate', ['pagename'=>'integrate']);
    }
}
