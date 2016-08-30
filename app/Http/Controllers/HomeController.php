<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
public function login()
    {
        $this->middleware('auth');
        return view('login');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $this->middleware('auth');
        return view('search');
    }
    public function adv()
            
    {
        $this->middleware('auth');
        return view('new-adv');
    }
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }
    
     public function signup()
    {
        return view('register');
    }
}
