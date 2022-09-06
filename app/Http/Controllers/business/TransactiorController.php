<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactiorController extends Controller
{
    public function index()
    {
        return view('business.Transactior', ['pagename'=>'transaction']);
    }
}
