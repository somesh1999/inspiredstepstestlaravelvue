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
        $messenger=array("Whatsapp", "line", "kakao", "Instagram", "Wechat");
        $financial_programme= array("Parent","Yourself","Others");
        $skillset= array("Beginner","Intermediate","Advanced");
        return view('home');
    }
}
