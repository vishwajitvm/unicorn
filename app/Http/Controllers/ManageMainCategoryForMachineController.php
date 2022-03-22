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
use Illuminate\Support\Facades\View;
use App\Models\dealer ;
use App\Models\main_category ;

class ManageMainCategoryForMachineController extends Controller
{
    //ADD MAIN CATAGORY HERE
    public function AddMainCatagoryForMachine() {
        return view('backend.main_category.add_category') ;
    }

    //store the main category here
    public function StoreMainCatagoryForMachine(Request $request) {
        $data = new main_category() ;
        $data->category_name = $request->category_name ;
        $data->category_description = $request->category_description ;

        $category_images = array() ;
        if($multi_image_filess = $request->file('category_images')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/sub_machine_img/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/categories_data/'),$multi_image_full_name)  ;
                $category_images[] = $multi_image_url ;
                $data->category_images = implode('|' , $category_images) ;

            }
        }//multi image upload end here

        $data->category_status = $request->category_status ;
        $data->save() ;
        $notification = array(
            'message' => 'Main Category For Machine is Created Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('maincategory.add')->with($notification) ;


    }
}
