<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\request_machine ;

class ManageAdminWebsiteMachineRequestsController extends Controller
{
    //View all Machine Request From POPUP PAGE
    public function ViewAllWEbsiteMachineRequests() {
        $data = request_machine::latest()->get() ;
        return view('backend.website_machine_requests.view' , compact(['data'])) ;

    }
}
