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
use App\Models\main_category;
use App\Models\manage_credential;
use Illuminate\Auth\Events\Failed;
use phpDocumentor\Reflection\Types\Null_;
use PHPUnit\Framework\Constraint\IsTrue;
use App\Models\service_request ;
use Illuminate\Support\Facades\Mail ;
use App\Models\request_machine ;

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
        return view('website.submachinedetails' , compact(['data'])) ;
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

    // services
    public function PartAndServices() {
        return view('website.services' ) ;
    }

    //Partsa and Services Requests
    public function PostServicesRequest(Request $request) {
        $data = new service_request() ;
        $data->service_username = $request->service_username ;
        $data->service_useremail = $request->service_useremail ;
        $data->service_phonenumber = $request->service_phonenumber ;
        $data->service_address = $request->service_address ;
        //Images
        $service_photos = array() ;
        if($multi_image_filess = $request->file('service_photos')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/website_services/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/website_services/'),$multi_image_full_name)  ;
                $service_photos[] = $multi_image_url ;
                $data->service_photos = implode('|' , $service_photos	) ;
            }
        }//multi image upload end here

        //Videos
        $service_videos = array() ;
        if($multi_image_filess = $request->file('service_videos')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/website_services/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/website_services/'),$multi_image_full_name)  ;
                $service_videos[] = $multi_image_url ;
                $data->service_videos = implode('|' , $service_videos) ;

            }
        }//multi Videos upload end here

        //Invoices
        $service_invoice = array() ;
        if($multi_image_filess = $request->file('service_invoice')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/website_services/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/website_services/'),$multi_image_full_name)  ;
                $service_invoice[] = $multi_image_url ;
                $data->service_invoice = implode('|' , $service_invoice ) ;

            }
        }//multi Invoices upload end here
        $data->service_checkbox_policy	= $request->service_checkbox_policy	;
        $data->save() ;
        //mail start
        $datamail = ['data'=>"You have recived a new request For Service" , 'name'=> $request->service_username , 'phonenumber'=>$request->service_phonenumber , 'Address'=>$request->service_address ] ;
        $user['to']='Salesunicornequipment@gmail.com' ;

        Mail::send('mails.NewServiceRequestMail', $datamail, function ($messages) use ($user) {
            $messages->to($user['to']) ;
            $messages->subject("UNICORN EQUIPMENT SERVICE REQUEST") ;
        });
        //mail end
        $notification = array(
            'message' => 'Your Request For Services is Send Successfully',
            'alert-type' => 'success',
        ) ;
        return redirect()->route('services')->with($notification) ;
    }

    //POPUP REQUEST Store
    public function POPUPRequestStore (Request $request) {
        $data = new request_machine() ;
        $data->request_username = $request->request_username ;
        $data->request_useremail = $request->request_useremail ;
        $data->request_userphone_number = $request->request_userphone_number ;
        $data->request_machine = $request->request_machine ;
        $data->request_submachine = $request->request_submachine ;
        $data->request_quantity = $request->request_quantity ;
        $data->request_message = $request->request_message ;
        $data->request_submachine_id = $request->request_submachine_id ;
        $data->save() ;
        return redirect()->back() ;
    }

    //our team
    public function OurTeam() {
        return view('website.ourteam' ) ;
    }

    //Manage Credentiaals page here
    public function Managecredentials() {
        $data = manage_credential::latest()->get() ;
        return view('website.credentials' , compact(['data']) ) ;
    }

    //AJAX REQUESTS
    public function AJAXWebsiteHeaderNavbarMachineData(Request $request) {
        $catData = $request->post('catData') ;  //patient name
        $maincategoryData = main_category::all()->where('category_name', $catData) ;
        // $data = mainmachine::all()->where('main_cat_id' , $maincategoryData) ;
        foreach($maincategoryData as $key=>$item) {
            $data = mainmachine::all()->where('main_cat_id' , $item->id) ;
            return response()->json(['data'=>$data]);
        }
        
    }

}
