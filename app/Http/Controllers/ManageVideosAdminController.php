<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manage_video ;

class ManageVideosAdminController extends Controller
{
    //add videos
    public function addVideos() {
        return view('backend.manage_videos.add') ;
    }

    //store videos here
    public function StoreVideos(Request $request) {
        $data = new manage_video() ;
        $data->video_name = $request->video_name ;
        //video
        if($request->file('gallery_video')) {
            $file = $request->file('gallery_video') ;
            @unlink(public_path('upload/manages_website_videos/'.$data->gallery_video)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/manages_website_videos'),$filename) ;
            $data['gallery_video'] = $filename ;
        }
        $data->save() ;
        $notification = array(
            'message' => 'Gallery Video Upload Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('managevideos.view')->with($notification) ;
    }

    //view
    public function ViewVideos() {
        $data = manage_video::latest()->get() ;
        return view('backend.manage_videos.viewpage' , compact(['data'])) ;
    }

    //delete videos
    public function DeleteVideos($id) {
        $editData = manage_video::find($id) ;
        $editData->delete() ;
        $notification = array(
            'message' => 'Selected Video Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('managevideos.view')->with($notification) ;
    }
}
