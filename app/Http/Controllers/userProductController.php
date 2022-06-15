<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\User ;
use App\Models\mainmachine;
use App\Models\submachine ; 
use App\Models\product ;
use DeepCopy\Filter\ReplaceFilter;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Mail ;

class userProductController extends Controller
{
    //adding the request here
    public function userProductRequestAdd() {
        $userData = User::find(Auth::user()->id) ;
        $mainmachineData = mainmachine::all()->where('machine_status',"active") ;
        $submachineData = submachine::all()->where('sub_machine_status',"active") ;
        $quantityData = range(1,50) ;
        return view('users_dashboard.products.add_products' , compact(['userData' , 'mainmachineData' , 'submachineData' , 'quantityData'])) ;
    }

    //ajex request for sub machine here
    public function GetSubCatAgainstMainCatEdit( Request $request, $id) {
        $ns = urldecode($id) ;
        echo json_encode(DB::table('submachines')->where('main_machine_name' , $id)->get()) ;        
    }

    //storing data
    public function userProductRequestStore(Request $request) {
        $productData = new product() ;
        $productData->Product_username = $request->Product_username ;
        $productData->Product_email = $request->Product_email ;
        $productData->user_phone_number = $request->user_phone_number ;
        $productData->product_main_machine = $request->product_main_machine ;
        $productData->product_sub_machine = $request->product_sub_machine ;
        $productData->product_quantity = $request->product_quantity ;
        $productData->phone_number = $request->phone_number ;
        $productData->product_message = $request->product_message ;
        $productData->save() ;

        //sending mail functionality here
        $data = ['data'=>"You have recived a new request from" , 'name'=> $request->Product_username , 'phonenumber'=>$request->phone_number , 'mainmachine'=>$request->product_main_machine , 'submachine'=>$request->product_sub_machine , 'qunatity'=>$request->product_quantity  ] ;
        $user['to']='Salesunicornequipment@gmail.com' ;

        Mail::send('mails.assignproductrequestmail', $data, function ($messages) use ($user) {
            $messages->to($user['to']) ;
            $messages->subject("New machine or model request") ;
        });
        //mail end here

        $notification = array(
            'message' => 'Your Product Request Sent Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('userproducts.view')->with($notification) ;
    }
    

    //view of the user product requests
    public function userProductRequestView() {
        $id = Auth::user()->name ;
        $productData = product::all()->where("Product_username", '==',$id) ;
        return view('users_dashboard.products.view_products' , compact('productData')) ;
    }

    //editing the request
    public function userProductRequestEdit($id) {
        $data = product::find($id) ;
        $userData = User::find(Auth::user()->id) ;
        $mainmachineData = mainmachine::all() ;
        $submachineData = submachine::all() ;
        $quantityData = range(1,50) ;

        return view('users_dashboard.products.edit_products' , compact(['userData' , 'mainmachineData' , 'submachineData' , 'quantityData' , 'data'])) ;
    }

    //updating the request
    public function userProductRequestUpdate(Request $request,$id) {
        $NewData = product::find($id) ;
        $NewData->Product_username = $request->Product_username ;
        $NewData->Product_email = $request->Product_email ;
        $NewData->user_phone_number = $request->user_phone_number ;
        $NewData->product_main_machine = $request->product_main_machine ;
        $NewData->product_sub_machine = $request->product_sub_machine ;
        $NewData->product_quantity = $request->product_quantity ;
        $NewData->phone_number = $request->phone_number ;
        $NewData->product_message = $request->product_message ;
        $NewData->save() ;
        $notification = array(
            'message' => 'Your Product Request Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('userproducts.view')->with($notification) ;

    }

    //deleting the request from user end 
    public function userProductRequestDelete($id) {
        $deletetProductData = product::find($id) ;
        $deletetProductData->delete() ;
        $notification = array(
            'message' => 'Your Request Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('userproducts.view')->with($notification) ;
    }

    public function AJAXUserProductSubmachineDataRequest(Request $request) {
        $productMainMachine = $request->post('productMainMachine') ;  //patient name
        $submachinenewdata = submachine::all()->where('main_machine_name' , $productMainMachine) ;

        foreach ($submachinenewdata as $key=>$submachinenames) {
            $html = '<option value="'. $submachinenames->sub_machine_name .'" > '. $submachinenames->sub_machine_name .' </option>' ;
            echo $html;
        }
    }

}
