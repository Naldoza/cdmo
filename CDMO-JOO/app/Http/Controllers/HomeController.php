<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.Users');
    }
    public function RequestStatus()
    {
        return view('forms.RequestStatus');
    }
    public function app()
    {
        return view('layouts.app');
    }
    public function index1()
    {
        return view('example');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function inprocessrequest()
    {
        return view('Request.InProcessRequest');
    }

    public function head()
    {
        return view('forms.HeadsForm');
    }
    public function Engr()
    {
        return view('forms.EngrForm');
    }
    public function Foreman()
    {
        return view('forms.ForemanForm');
    }
}
