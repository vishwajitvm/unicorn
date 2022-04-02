<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service_request ;

class AdminWebsiteSERVICESController extends Controller
{
    //View all Service Request
    public function ViewAllServicesRequest() {
        $data = service_request::latest()->get() ;
        return view('backend.services_pages.view' , compact(['data'])) ;
    }
}
