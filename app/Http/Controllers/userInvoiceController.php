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
use Illuminate\Support\Facades\DB ;

class userInvoiceController extends Controller
{
    //view invoice here
    public function userInvoiceView() {
        $usertable_userName = Auth::user()->name ;
        $datainvoice = invoice::all()->where("username", '==',$usertable_userName) ;
        $datainvoice = invoice::latest()->get() ; //fetching data in incresing order with latest
        return view('users_dashboard.invoice.view_userinvoice' , compact('datainvoice')) ;
    }
}
