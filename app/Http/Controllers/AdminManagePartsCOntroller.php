<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManagePartsCOntroller extends Controller
{
    //Add Parts
    public function AddParts() {
        return view('backend.parts.addparts') ;
    }
}
