<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function mobile_validate(Request $request)
    {
    	session([
            'mobile' => $request->mobile,
             'validation' => 'yes'
            ]);   	
        
        return redirect()->back();    
    }
}
