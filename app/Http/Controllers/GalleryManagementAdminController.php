<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryManagementAdminController extends Controller
{
    //add gallery
    public function AddGallery() {
        return view('backend.gallery.add') ;
    }
}
