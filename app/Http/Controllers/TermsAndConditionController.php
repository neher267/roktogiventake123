<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    	public function index()
    	{
    		return view('terms-and-condition');
    	}
}
