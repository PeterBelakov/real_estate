<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => ['login','register']]);
    }

    public function login() {
        if (Auth::check())
        {
            // The user is logged in...
            return view('index');
        }else{
             return view('login');
        }
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function offer() {

        return view('offer');
    }

    public function profile() {
        ;
        return view('profile');
    }

    public function my_adv() {

        return view('my-adv');
    }

    public function search() {

        return view('search');
    }

    public function adv() {

        return view('new-adv');
    }

    public function index() {

        return view('index');
    }

    public function register() {
  if (Auth::check())
        {
            // The user is logged in...
            return view('index');
        }else{
             return view('register');
        }
       
    }
}
