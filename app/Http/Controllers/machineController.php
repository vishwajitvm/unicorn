<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainmachine;
use Illuminate\Support\Facades\Auth ;
use Symfony\Component\Console\Input\Input;
use App\Models\main_category ;

class machineController extends Controller
{
    //all machine controller are here
    public function mainmachineAdd() {
        $data = main_category::all() ;
        return view('backend.machine.add_mainmachine' , compact(['data'])) ;
    }

    public function mainmachineStore(Request $request) {
        $data = new mainmachine() ;
        $data->main_cat_id = $request->main_cat_id ;
        $data->machine_name = $request->machine_name ;
        $data->machine_price = $request->machine_price ;
        $data->machine_description = $request->machine_description ;
        // $data->image = $request->image ;
        if($request->file('machine_image')) {
            $file = $request->file('machine_image') ;
            @unlink(public_path('upload/user_images/'.$data->machine_image)) ;
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/user_images'),$filename) ;
            $data['machine_image'] = $filename ;
        }
        $data->machine_status = $request->machine_status ;
        $data->save() ;
        $notification = array(
            'message' => 'Main Machine  Added Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('mainmachine.view')->with($notification) ;
    }

    //View the machine
    public function mainmachineView() {
        $machineData = mainmachine::all() ;
        $maincatdata = main_category::all() ;
        $machineData = mainmachine::latest()->get() ;
        return view('backend.machine.view_mainmachine' , ['mainMachineData'=>$machineData] , compact(['maincatdata'])) ;
    }

    //Main Machine Edit Data
    public function mainmachineEdit($id) {
        $data = main_category::all() ;
        $editData = mainmachine::find($id) ;
        return view('backend.machine.edit_mainmachine' ,compact(['editData' , 'data'])) ;
    }

    public function mainmachineUpdate(Request $request, $id) {
        $editData = mainmachine::find($id) ;
        $editData->main_cat_id = $request->main_cat_id ;
        $editData->machine_name = $request->machine_name ;
        $editData->machine_price = $request->machine_price ;
        $editData->machine_description = $request->machine_description ;
        if($request->file('machine_image')) {
            $file = $request->file('machine_image') ;
            @unlink(public_path('upload/user_images/'.$editData->machine_image)) ;
            //now we have to generate the name for images
            $filename = date('YmdHi').$file->getClientOriginalName() ;
            $file->move(public_path('upload/user_images'),$filename) ;
            $editData['machine_image'] = $filename ;
        }
        $editData->machine_status = $request->machine_status ;
        $editData->save() ;
        $notification = array(
            'message' => 'Main Machine Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('mainmachine.view')->with($notification) ;
    }

    //delete the machine
    public function mainmachineDelete($id) {
        $editData = mainmachine::find($id) ;
        $editData->delete() ;
        $notification = array(
            'message' => 'Main Machine Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('mainmachine.view')->with($notification) ;
    }
}
