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
use App\Models\assignproduct ;
use App\Models\insuranceclaim ;
use Illuminate\Support\Facades\Mail ;

class myProductsController extends Controller
{
    //view all your buyed producta and also track and claim the inchurance
    public function viewMyProducts() {
        $usertable_userName = Auth::user()->name ;
        // $datamyproducts = assignproduct::all()->where("username", '==',$usertable_userName) ;
        $datamyproducts = assignproduct::latest()->get()->where("username", '==',$usertable_userName) ;

        return view('users_dashboard.myproducts.view_myproducts' , compact('datamyproducts')) ;

    }

    //claim insurance data here
    public function myproductClaimInsurance($id) {
        $userData = Auth::user() ;
        $claimData = assignproduct::find($id) ;
        $mainmachineData = explode(",",$claimData->assign_mainmachin_name) ;
        $submachineData = explode(",",$claimData->assign_sub_machin_name ) ;
        $serialnumberData = explode("," , $claimData->serial_number) ;
        return view('users_dashboard.myproducts.add_myproductsclaim' , compact(['mainmachineData' , 'submachineData' , 'serialnumberData' , 'claimData' , 'userData'])) ;
    }

    //storing the claims
    public function MyProductsstoreClaimInsurance(Request $request) {
        $claimData = new insuranceclaim() ;
        $claimData->username = $request->username ;
        $claimData->useremail = $request->useremail ;
        $claimData->userphonenumber1 = $request->userphonenumber1 ;
        $claimData->useraddress = $request->useraddress ;
        $claimData->company_name = $request->company_name ;
        $claimData->mainmachine = $request->mainmachine ;
        $claimData->submachine = $request->submachine ;
        $claimData->serialnumber = $request->serialnumber ;
        $claimData->warranty_from = $request->warranty_from ;
        $claimData->warranty_to = $request->warranty_to ;
        $claimData->message = $request->message ;
        $claimData->userphonenumber2 = $request->userphonenumber2 ;
        //Multiple image uplod
        $claimimages = array() ;
        if($multi_image_filess = $request->file('claimimages')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/insurance_gallary/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/insurance_gallary/'),$multi_image_full_name)  ;
                $claimimages[] = $multi_image_url ;
                $claimData->claimimages = implode('|' , $claimimages) ;

            }
        }//multi image upload end here

                //now uplaod video of sub machine
                $claimvideos = array() ;
                if($multi_image_filess = $request->file('claimvideos')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        // $upload_path = 'public/multiple_image/' ;
                        $upload_path = 'upload/insurance_gallary/' ;
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/insurance_gallary/'),$multi_image_full_name)  ;
                        $claimvideos[] = $multi_image_url ;
                        $claimData->claimvideos = implode('|' , $claimvideos) ;
                    }
                } //video upload end here
        $claimData->save() ;

        //sending mail functionality here
        $data = [ 'name'=> $request->username ,
         'phonenumber'=>$request->userphonenumber2 ,
         'company'=>$request->company_name ,
         'claimachine'=>$request->mainmachine ,
         'claimsubmachine'=>$request->submachine ,
         'claimserialno'=>$request->serialnumber , 
         'claimemail' => $request->useremail ,
         'claimwarantyfrom'=>$request->warranty_from ,
         'claimwarantyto' =>$request->warranty_to ,
         'claimmessage' => $request->message ] ;
        $user['to']='memebazzzar@gmail.com' ;

        Mail::send('mails.claimrequestmail', $data, function ($messages) use ($user) {
            $messages->to($user['to']) ;
            $messages->subject("New machine or model request") ;
        });
        //mail end here

        $notification = array(
            'message' => 'Your Request for Claim is Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('myproduct.view')->with($notification) ;
    }

    //View of Claim List
    public function myProductClaimList() {
        $usertypeData = Auth::user()->name ;
        // $claimData = insuranceclaim::all();
        $claimData = insuranceclaim::latest()->get()->where('username' , $usertypeData)  ; 
        return view('users_dashboard.myproducts.view_claimlist' , compact(['claimData']) ) ;
    }

    
}
