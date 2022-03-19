<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dealer;

class ManageDealersController extends Controller
{
    //add dealers  dealer.adddealer
    public function AddManageDealers() {
        $statename = array('Andhra Pradesh' , 'Arunachal Pradesh' , 'Assam' , 'Bihar' , 'Chhattisgarh' , 'Goa' , 'Gujarat' , 'Haryana' , 'Himachal Pradesh' , 'Jammu' , 'ladakh' , 'Jharkhand' , 'Karnataka' , 'Karnataka' , 'Kerala' , 'Madhya Pradesh' , 'Maharashtra' , 'Manipur' , 'Meghalaya' , 'Mizoram' , 'Nagaland' , 'Odisha' , 'Punjab' , 'Rajasthan' , 'Sikkim' , 'Tamil Nadu' , 'Tripura' , 'Uttarakhand' , 'Uttar Pradesh' , 'West Bengal' , 'Andaman & Nicobar' , 'Chandigarh' , 'Dadra and Nagar Haveli' , 'Daman & Diu' , 'New Delhi' , 'Lakshadweep' , 'Puducherry') ;
        return view('backend.dealer.adddealer' , compact(['statename'])) ;
    }

    //stor the dealer data 
    public function StoreManageDealers(Request $request) {
        $data = new dealer() ;
        $data->dealercompany_name = $request->dealercompany_name ;
        $data->dealermobile = $request->dealermobile ;
        $data->dealerphone = $request->dealerphone ;
        $data->dealercomapany_address = $request->dealercomapany_address ;
        $data->dealerstate = $request->dealerstate ;
        $data->dealerpincode = $request->dealerpincode ;
        $data->save() ;
        $notification = array(
            'message' => "$request->dealercompany_name  Added Successfully",
            'alert-type' => 'success'
        ) ;
        return redirect()->route('dealers.add')->with($notification) ;


    }
}
