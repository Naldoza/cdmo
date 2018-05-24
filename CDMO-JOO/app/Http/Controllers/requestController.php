<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
     public function ggg ()
    {
        return view('Request.request');
    }
}
