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
        return view('home');
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
    public function requests()
    {
        return view('requesting');
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
