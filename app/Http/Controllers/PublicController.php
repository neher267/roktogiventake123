<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
    	//session(['validation' => 'no']);
    	return view('home');
    }

     public function contact()
    {
    	return view('contact');
    }


}
