<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainmachine;
use App\Models\submachine ; 
use Symfony\Component\HttpFoundation\Session\Session ;

class subMachineController extends Controller
{
    //add sub machine here
    public function submachineAdd() {  //getting view
        $sel_maimachine = new mainmachine() ;
        $selectData = mainmachine::all() ;
        return view('backend.submachine.add_submachine' , ['selectData'=>$selectData]) ;
    }

    public function submachineStore(Request $request ) { 
        // dd($request->all()) ;
        $dataDB = new submachine() ;
        $dataDB->main_machine_name = $request->main_machine_name ;
        $dataDB->sub_machine_name = $request->sub_machine_name ;
        $dataDB->sub_machine_price = $request->sub_machine_price ;
        $dataDB->sub_machine_description = $request->sub_machine_description ;
        //Multiple image uplod
        $sub_machine_image = array() ;
        if($multi_image_filess = $request->file('sub_machine_image')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/sub_machine_img/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/sub_machine_img/'),$multi_image_full_name)  ;
                $sub_machine_image[] = $multi_image_url ;
                $dataDB->sub_machine_image = implode('|' , $sub_machine_image) ;

            }
        }//multi image upload end here

        //now uplaod video of sub machine
        $sub_machine_video = array() ;
        if($multi_image_filess = $request->file('sub_machine_video')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/sub_machine_videos/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/sub_machine_videos/'),$multi_image_full_name)  ;
                $sub_machine_video[] = $multi_image_url ;
                $dataDB->sub_machine_video = implode('|' , $sub_machine_video) ;

            }
        } //video upload end here

        //upload brochure here
        $sub_machine_brochure = array() ;
        if($multi_image_filess = $request->file('sub_machine_brochure')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/sub_machine_brochure/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/sub_machine_brochure/'),$multi_image_full_name)  ;
                $sub_machine_brochure[] = $multi_image_url ;
                $dataDB->sub_machine_brochure = implode('|' , $sub_machine_brochure) ;

            }
        }
        //upload brochure end here
        $dataDB->sub_machine_status = $request->sub_machine_status ;
        $dataDB->save() ;
        //multiple image uplod end here
        $notification = array(
            'message' => 'Sub Machine  Added Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('submachine.view')->with($notification) ;
    }

    //view sub machine
    public function submachineView() {
        $SubMachineData = submachine::all() ;
        $SubMachineData = submachine::latest()->get() ;
        return view('backend.submachine.view_submachine' , ['SubMachineData'=>$SubMachineData] ) ;
    }

    //Edit Sub Machine
    public function submachineEdit($id) {
        $editsubmachineData = submachine::find($id) ;
        $selectData = mainmachine::all() ;
        return view('backend.submachine.edit_submachine' , ['selectData'=>$selectData , 'editsubmachineData'=>$editsubmachineData ]) ;
    }

    //update submachine data
    public function submachineUpdate(Request $request , $id) {
        $editsubmachineData = submachine::find($id) ;
        $editsubmachineData->main_machine_name = $request->main_machine_name ;
        $editsubmachineData->sub_machine_name = $request->sub_machine_name ;
        $editsubmachineData->sub_machine_price = $request->sub_machine_price ;
        $editsubmachineData->sub_machine_description = $request->sub_machine_description ;

                //Multiple image uplod
                $sub_machine_image = array() ;
                if($multi_image_filess = $request->file('sub_machine_image')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        // $upload_path = 'public/multiple_image/' ;
                        $upload_path = 'upload/sub_machine_img/' ;
        
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/sub_machine_img/'),$multi_image_full_name)  ;
                        $sub_machine_image[] = $multi_image_url ;
                        $editsubmachineData->sub_machine_image = implode('|' , $sub_machine_image) ;
        
                    }
                }//multi image upload end here

                        //now uplaod video of sub machine
        $sub_machine_video = array() ;
        if($multi_image_filess = $request->file('sub_machine_video')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/sub_machine_videos/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/sub_machine_videos/'),$multi_image_full_name)  ;
                $sub_machine_video[] = $multi_image_url ;
                $editsubmachineData->sub_machine_video = implode('|' , $sub_machine_video) ;

            }
        } //video upload end here

        //upload brochure here
        $sub_machine_brochure = array() ;
        if($multi_image_filess = $request->file('sub_machine_brochure')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                // $upload_path = 'public/multiple_image/' ;
                $upload_path = 'upload/sub_machine_brochure/' ;

                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/sub_machine_brochure/'),$multi_image_full_name)  ;
                $sub_machine_brochure[] = $multi_image_url ;
                $editsubmachineData->sub_machine_brochure = implode('|' , $sub_machine_brochure) ;

            }
        }
        //upload brochure end here
        
        $editsubmachineData->sub_machine_status = $request->sub_machine_status ;
        $editsubmachineData->save() ;
        $notification = array(
            'message' => 'Sub Machine  Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('submachine.view')->with($notification) ;
    }

    //Delete the sub machine data here
    public function submachineDelete($id) {
        $deleteSubmachineData = submachine::find($id) ;
        $deleteSubmachineData->delete() ;
        $notification = array(
            'message' => 'Sub Machine Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('submachine.view')->with($notification) ;
    }

    
}
