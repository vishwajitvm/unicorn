<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainmachine ;
use App\Models\submachine ;
use App\Models\machine_part ;

class AdminManagePartsCOntroller extends Controller
{
    //Add Parts
    public function AddParts() {
        $mainmachinedata = mainmachine::orderBy('machine_name')->get() ;
        $submachinedata = submachine::orderBy('sub_machine_name')->get() ;
        return view('backend.parts.addparts' , compact(['mainmachinedata' , 'submachinedata'])) ;
    }

    //Store Parts
    public function StorePartsDB(Request $request) {
        $data = new machine_part() ;
        $data->parts_mainmachine = $request->parts_mainmachine ;
        $data->parts_submachine = $request->parts_submachine ;
        $data->parts_name = $request->parts_name ;
        $data->parts_description = $request->parts_description ;
        //images
        //Multiple image uplod
        $parts_images = array() ;
        if($multi_image_filess = $request->file('parts_images')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/machine_parts/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/machine_parts/'),$multi_image_full_name)  ;
                $parts_images[] = $multi_image_url ;
                $data->parts_images = implode('|' , $parts_images) ;
            }
        }//multi image upload end here

        //Multiple Videos uplode
        $parts_videos = array() ;
        if($multi_image_filess = $request->file('parts_videos')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/machine_parts/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/machine_parts/'),$multi_image_full_name)  ;
                $parts_videos[] = $multi_image_url ;
                $data->parts_videos = implode('|' , $parts_videos) ;
            }
        }//multi Videos upload end here
        $data->parts_status = $request->parts_status ;
        $data->save() ;
        $notification = array(
            'message' => "$request->parts_name Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('manage-parts.add')->with($notification) ;
    }

    //view parts here
    public function ViewParts() {
        $data = machine_part::latest()->get() ;
        return view('backend.parts.viewparts' , compact(['data'])) ;
    }
}
