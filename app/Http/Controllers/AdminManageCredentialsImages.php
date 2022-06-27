<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manage_credential ;

class AdminManageCredentialsImages extends Controller
{
    //Add 
    public function AddCertificatesOnCredentails() {
        return view('backend.credentials.add') ;
    }

    //store
    public function StoreCertificatesOnCredentails(Request $request) {
       $data = new manage_credential() ;
       $data->credential_name = $request->credential_name ;
        // $data->image = $request->image ;
        if($request->file('credential_image')) {
            $file = $request->file('credential_image') ;
            @unlink(public_path('upload/gallery_images/'.$data->credential_image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/gallery_images'),$filename) ;
            $data['credential_image'] = $filename ;
        }
        $data->save() ;
        $notification = array(
            'message' => 'Credentials Certificate Image Upload Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('managecredentials.view')->with($notification) ;
    }

    //view 
    public function ViewCertificatesOnCredentails() {
        $data = manage_credential::latest()->get() ;
        return view('backend.credentials.view' , compact(['data'])) ;
    }

    //delete 
    public function DeleteCredentials($id) {
        $deleteSubmachineData = manage_credential::find($id) ;
        $deleteSubmachineData->delete() ;
        $notification = array(
            'message' => 'Selected Credential Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('managecredentials.view')->with($notification) ;
    }
}
