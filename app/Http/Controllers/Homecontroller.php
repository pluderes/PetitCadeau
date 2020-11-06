<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
    	return view('pages.home');
    }
    public function detail()
    {
     	return view('pages.detail');
    }
    public function category(){
    	return view('pages.category');
    }
}
