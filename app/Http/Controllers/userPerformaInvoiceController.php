<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainmachine;
use App\Models\submachine ; 
use Symfony\Component\HttpFoundation\Session\Session ;
use Illuminate\Support\Facades\Auth ;
use App\Models\User;
use Illuminate\Support\Facades\Hash ;
use App\Models\invoice ;
use App\Models\product;
use App\Models\proforma ;

class userPerformaInvoiceController extends Controller
{
    //view User Perform Invoice Controller here
    public function userPerformaInvoiceView() {
        $usertable_userName = Auth::user()->name ;
        $datainvoice = proforma::all()->where("username", '==',$usertable_userName) ;
        $datainvoice = proforma::latest()->get() ; //fetching data in incresing order with latest
        return view('users_dashboard.invoice.view_proformainvoice' , compact('datainvoice')) ;
    }
}
