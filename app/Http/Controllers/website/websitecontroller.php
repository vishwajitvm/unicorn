<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
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
use App\Models\assignproduct ;
use App\Models\insuranceclaim ;
use Illuminate\Support\Facades\View;
use App\Models\dealer ;
use Error;
use Illuminate\Auth\Events\Failed;
use phpDocumentor\Reflection\Types\Null_;
use PHPUnit\Framework\Constraint\IsTrue;

class websitecontroller extends Controller
{
    //mainmachine selected data using main catagory data 
    public function mainmachinelistData($id) {
        $data = mainmachine::all()->where('main_cat_id' , $id) ;
        return view('website.mainmachine' , compact(['data'])) ;
    }

    //mainmachinelist
    public function mainmachinelist() {
        $data = mainmachine::latest()->get() ;
        return view('website.mainmachine' , compact(['data'])) ;
    } 

    //submachine
    public function submachinelist($id) {
        $idData = mainmachine::find($id) ;
        $data = submachine::latest()->where('main_machine_name' , $idData->machine_name)->get() ;
        return view('website.submachine' , compact(['data' , 'idData'])) ;
    }

    //submachinedetails submachinedetails
    public function submachinedetails($id) {
        $data = submachine::find($id) ;
        return view('website.submachinedetails' , compact(['data' ])) ;
    }

    //find a dealer 
    public function findADealer() {
        $data = dealer::all() ;
        return view('website.findadealer' , compact(['data'])) ;
    }

    //about us page here
    public function AboutUs() {
        return view('website.aboutus' ) ;

    }

    //contact us page contactus
    public function ContactUs() {
        return view('website.contactus' ) ;
    }

        public function checkAuthentication() {
        
        
        if(!Auth::user()) {
            return redirect()->route('login') ;
        }
        else{
            $id = Auth::user()->id ;
            $user = User::find($id) ;
            if($user->usertype == 'admin') {
                return redirect()->route('dashboard') ;
            }
            else if($user->usertype == 'user') {
                return redirect()->route('userdashboard') ;
            }
            else{
                return redirect()->route('login') ;
            }
        }
    }

    //Part and services
    public function PartAndServices() {
        return view('website.part_and_services' ) ;

    }

}
