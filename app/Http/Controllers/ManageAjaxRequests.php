<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageAjaxRequests extends Controller
{
    //Website herader Request Data here
    public function HeaderRequest(Request $request) {
        return "hello" ;
    }
    
}
