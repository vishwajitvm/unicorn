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

class insurancRequestController extends Controller
{
    //view all the insurance request here
    public function claimRequestView() {
        $dataClaimRequest = insuranceclaim::all() ;
        $dataClaimRequest = insuranceclaim::latest()->get() ;
        return view('backend.claim_request.view_requestclaim' , compact(['dataClaimRequest'])) ;
    }

    //new request for insurance view is here
    public function claimRequestNewView() {
        $dataClaimRequest = insuranceclaim::latest()->get()->where("request_status", null) ;
        // $dataClaimRequest = insuranceclaim::all()->where("request_status", null)  ;
        return view('backend.claim_request.view_newrequestclaim' , compact(['dataClaimRequest'])) ;
    }

    //approved claim request view is here
    public function claimRequestApprovedView() {
        $dataClaimRequest = insuranceclaim::latest()->get()->where("request_status", "approved") ;
        // $dataClaimRequest = insuranceclaim::all()->where("request_status", "approved")  ;
        return view('backend.claim_request.view_newrequestclaim' , compact(['dataClaimRequest'])) ;
    }

    //denaied claim request view here
    public function claimRequestDeniedView() {
        $dataClaimRequest = insuranceclaim::latest()->get()->where("request_status", "deny") ;
        // $dataClaimRequest = insuranceclaim::all()->where("request_status", "deny")  ;
        return view('backend.claim_request.view_newrequestclaim' , compact(['dataClaimRequest'])) ;
    }

    //edit claim request from admin side
    public function claimRequestEdit($id) {
       $dataEdit = insuranceclaim::find($id) ;
       return view('backend.claim_request.detailview_requestclaim' , compact(['dataEdit'])) ;
    }

    //claimRequestApprove approve of disapprove the claim data view
    public function claimRequestApprove($id) {
        $data = insuranceclaim::find($id) ;
        return view('backend.claim_request.approve_edit' , compact(['data'])) ;
    }

    //postinf the data of approval of claims
    public function claimRequestStore(Request $request, $id) {
        $dataPost = insuranceclaim::find($id) ;
        $newdata = insuranceclaim::all() ;
        $dataPost->request_status = $request->request_status ;
        $dataPost->save() ;
        $notification = array(
            'message' => 'Your Updated the claims of user insurance Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('claimrequest.view' )->with($notification) ;

    }
}
