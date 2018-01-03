<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function index()
    {
    	return view('layouts.auth.login');
    }

    public function login (Request $request)
    {
    	Sentinel::authenticate($request->all());
        	if(Sentinel::check())
        	{
            	return redirect('/');
        	}
        	else
        		return redirect()->back();
    }

    public function logout()
    {
        Sentinel::logout(null, true);
        return redirect('/');
    }
}
