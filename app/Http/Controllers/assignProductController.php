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

class assignProductController extends Controller
{
    //adding the product to user here
    public function assignProductAdd() {
        $mainmachinename = mainmachine::all() ;
        $subMachineData = submachine::all() ;
        $userData = User::all()->where('usertype','user') ;
        return view('backend.assignproduct.add_assignproduct', compact(['mainmachinename' , 'subMachineData' , 'userData']) ) ;
    }

    //storing the data here
    public function assignProductStore(Request $request) {
        $assignProductData = new assignproduct() ;
        $assignProductData->username = $request->username ;
        $assignProductData->assign_mainmachin_name = $request->assign_mainmachin_name ;
        $assignProductData->assign_sub_machin_name = $request->assign_sub_machin_name ;
        $assignProductData->assign_machin_quantitys = $request->assign_machin_quantitys ;
        $assignProductData->serial_number = $request->serial_number ;
        $assignProductData->warranty_from = $request->warranty_from ;
        $assignProductData->warranty_to = $request->warranty_to ;
        $assignProductData->logisticpartner = $request->logisticpartner ;
        $assignProductData->logisticpartner_link = $request->logisticpartner_link ;
        $assignProductData->trackingnumber = $request->trackingnumber ;

                //Multiple image uplod
                $assign_images = array() ;
                if($multi_image_filess = $request->file('assign_images')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        $upload_path = 'upload/assign_product/' ;
        
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/assign_product/'),$multi_image_full_name)  ;
                        $assign_images[] = $multi_image_url ;
                        $assignProductData->assign_images = implode('|' , $assign_images) ;
        
                    }
                }//multi image upload end here
        
                //now uplaod video of sub machine
                $assign_videos = array() ;
                if($multi_image_filess = $request->file('assign_videos')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        $upload_path = 'upload/assign_product/' ;
        
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/assign_product/'),$multi_image_full_name)  ;
                        $assign_videos[] = $multi_image_url ;
                        $assignProductData->assign_videos = implode('|' , $assign_videos) ;
        
                    }
                } //video upload end here
        
        $assignProductData->save() ;
        $notification = array(
            'message' => 'Product Assign  succesfully ',
            'alert-type' => 'success'
        ) ;
       
        return redirect()->route('assignproduct.view')->with($notification) ;
    }

    //view the assigned products [ALL]
    public function assignProductView() {
        $dataAssignProduct = assignproduct::all() ;
        $dataAssignProduct = assignproduct::latest()->get() ;
        return view('backend.assignproduct.view_assignproduct' , ['dataAssignProduct'=>$dataAssignProduct]) ;
    }

    //new view based on user names[ USER BASED ]
    public function assignProductUserView() {
        $userData = user::all()->where('usertype','user') ;
        $dataAssignProduct = assignproduct::all() ;
        $dataAssignProduct = assignproduct::latest()->get() ;

        return view('backend.assignproduct.view_userassignproduct', compact(['userData', 'dataAssignProduct'])) ;
    }

    //fetching the data of assigned product bases on user id from assignproduct databaes
    public function assignProductUserViewAll($id) {
        $userData = User::find($id) ;
        $dataAssignProduct = assignproduct::all()->where("username" , $userData->name)  ;
        // $dataAssignProduct = assignproduct::latest()->get() ;

        return view('backend.assignproduct.view_assignproduct', compact(['userData', 'dataAssignProduct'])) ;

    }

    //editing the assigned products here
    public function assignProductEdit($id) {
        $editData = assignproduct::find($id) ;
        $mainmachinename = mainmachine::all() ;
        $subMachineData = submachine::all() ;
        $userData = User::all()->where('usertype','user') ;
    
        return view('backend.assignproduct.edit_assignproduct', compact(['mainmachinename' , 'subMachineData' , 'userData' , 'editData']) ) ;
    }

    //updating the data here
    public function assignProductUpdate(Request $request,$id) {
        $data = assignproduct::find($id) ;
        $data->username = $request->username ;
        $data->assign_mainmachin_name = $request->assign_mainmachin_name ;
        $data->assign_sub_machin_name = $request->assign_sub_machin_name ;
        $data->assign_machin_quantitys = $request->assign_machin_quantitys ;
        $data->serial_number = $request->serial_number ;
        $data->warranty_from = $request->warranty_from ;
        $data->warranty_to = $request->warranty_to ;
        $data->logisticpartner = $request->logisticpartner ;
        $data->logisticpartner_link = $request->logisticpartner_link ;
        $data->trackingnumber = $request->trackingnumber ;
                        //Multiple image uplod
                        $assign_images = array() ;
                        if($multi_image_filess = $request->file('assign_images')) {
                            foreach($multi_image_filess as $multi_image_file) {
                                $multi_image_name = md5(rand(1000 , 10000)) ;
                                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                                $upload_path = 'upload/assign_product/' ;
                
                                $multi_image_url = $upload_path.$multi_image_full_name ;
                                $multi_image_file->move(public_path('upload/assign_product/'),$multi_image_full_name)  ;
                                $assign_images[] = $multi_image_url ;
                                $data->assign_images = implode('|' , $assign_images) ;
                
                            }
                        }//multi image upload end here
                
                        //now uplaod video of sub machine
                        $assign_videos = array() ;
                        if($multi_image_filess = $request->file('assign_videos')) {
                            foreach($multi_image_filess as $multi_image_file) {
                                $multi_image_name = md5(rand(1000 , 10000)) ;
                                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                                $upload_path = 'upload/assign_product/' ;
                
                                $multi_image_url = $upload_path.$multi_image_full_name ;
                                $multi_image_file->move(public_path('upload/assign_product/'),$multi_image_full_name)  ;
                                $assign_videos[] = $multi_image_url ;
                                $data->assign_videos = implode('|' , $assign_videos) ;
                
                            }
                        } //video upload end here
        
        $data->save() ;
        $notification = array(
            'message' => 'Product Assign Updated  succesfully ',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('assignproduct.userview')->with($notification) ;

    }

    public function assignProductDelete($id) {
        $deleteData = assignproduct::find($id) ;
        $deleteData->delete() ;
        $notification = array(
            'message' => 'Assigned Product  Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('assignproduct.userview')->with($notification) ;

    }
}
