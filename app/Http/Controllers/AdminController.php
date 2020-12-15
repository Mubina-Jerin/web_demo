<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    function __construct(){

        $this->middleware('auth');
    }
    function index(){
        $user=Auth::user();
        return view('pages.AdminHome');
    }
}
