<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery ;
use Illuminate\Support\Facades\Auth ;
use Symfony\Component\Console\Input\Input;


class GalleryManagementAdminController extends Controller
{
    //add gallery
    public function AddGallery() {
        return view('backend.gallery.add') ;
    }

    //store images
    public function StoreGallery(Request $request) {
        $data = new gallery() ;
        $data->gallery_img_name = $request->gallery_img_name ;
        $data->gallery_state_name = $request->gallery_state_name ;
        // $data->image = $request->image ;
        if($request->file('gallery_image')) {
            $file = $request->file('gallery_image') ;
            @unlink(public_path('upload/gallery_images/'.$data->gallery_image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/gallery_images'),$filename) ;
            $data['gallery_image'] = $filename ;
        }
        $data->save() ;
        $notification = array(
            'message' => 'Gallery Image Upload Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('gallery.add')->with($notification) ;
    }

    //view
    public function viewGallery() {
        $data = gallery::latest()->get() ;
        return view('backend.gallery.view' , compact(['data'])) ;
    }

    //delete 
    public function DeleteGallery($id) {
        $editData = gallery::find($id) ;
        $editData->delete() ;
        $notification = array(
            'message' => 'Selected Image Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('gallery.view')->with($notification) ;
    }
}
