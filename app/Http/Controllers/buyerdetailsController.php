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
use App\Models\proforma ;

class buyerdetailsController extends Controller
{
    //adding invoices here
    public function buyerdetailsAdd() {
        $mainmachinename = mainmachine::all() ;
        $subMachineData = submachine::all() ;
        $userData = User::all()->where('usertype','user') ;
        return view('backend.buyerdetails.invoicedetails' , compact( ['mainmachinename' , 'subMachineData' ,'userData']) ) ;
    }

    //uploading the data from invoice form or buying details form
    public function buyerdetailsStore(Request $request) {
        $invoiceData = new invoice() ;
        $invoiceData->username = $request->username ;
        $invoiceData->main_machine_name = implode(',' , $request->main_machine_name) ;
        $invoiceData->sub_machine_name = implode( ',' ,$request->sub_machine_name) ;
        $invoiceData->total_price = $request->total_price ;
        $invoiceData->payment_link = $request->payment_link ;
        // $invoiceData->serial_number = $request->serial_number ;
        // $invoiceData->warranty_days_from = $request->warranty_days_from ;
        // $invoiceData->warranty_days_to = $request->warranty_days_to ;
        // <<====UPLOADING INVOICE HERE=====>>
        $upload_invoice = array() ;
        if($multi_image_filess = $request->file('upload_invoice')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/upload_invoice/' ;
                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/upload_invoice/'),$multi_image_full_name)  ;
                $upload_invoice[] = $multi_image_url ;
                $invoiceData->upload_invoice = implode('|' , $upload_invoice) ;
            }
        }
        //upload brochure end here
        // $invoiceData->invoice_status = $request->invoice_status ;
        $invoiceData->save() ;
        $notification = array(
            'message' => 'Your Invoice send succesfully ',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('buyerdetails.view')->with($notification) ;
    }

    //view of buying details here
    public function buyerdetailsView() {
        $datainvoice = invoice::all() ;
        $datainvoice = invoice::latest()->get() ;
        return view('backend.buyerdetails.invoicedetailsview' , ['datainvoice'=>$datainvoice]) ;
    }

    //Edit buying details here
    public function buyerdetailsEdit($id) {
        $editinvoiceData = invoice::find($id) ;
        $mainmachinename = mainmachine::all() ;
        $subMachineData = submachine::all() ;
        $userData = User::all()->where('usertype','user') ;
        return view('backend.buyerdetails.edit_invoicedetails' , compact( ['editinvoiceData' , 'mainmachinename' , 'subMachineData' ,'userData']) ) ;
    }

    //updating data from buing details
    public function buyerdetailsUpdate(Request $request,$id) {
        $invoiceupdatedata = invoice::find($id) ;
        $invoiceupdatedata->username = $request->username ;
        // $invoiceupdatedata->main_machine_name = $request->main_machine_name ;
        // $invoiceupdatedata->sub_machine_name = $request->sub_machine_name ;
        $invoiceupdatedata->main_machine_name = implode(',' , $request->main_machine_name) ;
        $invoiceupdatedata->sub_machine_name = implode( ',' ,$request->sub_machine_name) ;
        $invoiceupdatedata->total_price = $request->total_price ;
        $invoiceupdatedata->payment_link = $request->payment_link ;
        // $invoiceupdatedata->serial_number = $request->serial_number ;
        // $invoiceupdatedata->warranty_days_from = $request->warranty_days_from ;
        // $invoiceupdatedata->warranty_days_to = $request->warranty_days_to ;
                // <<====UPDATING INVOICE HERE=====>>
                $upload_invoice = array() ;
                if($multi_image_filess = $request->file('upload_invoice')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        $upload_path = 'upload/upload_invoice/' ;
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/upload_invoice/'),$multi_image_full_name)  ;
                        $upload_invoice[] = $multi_image_url ;
                        $invoiceupdatedata->upload_invoice = implode('|' , $upload_invoice) ;
                    }
                }
                //UPDATING INVOICE END HERE
        // $invoiceupdatedata->invoice_status = $request->invoice_status ;
        $invoiceupdatedata->save() ;
        $notification = array(
            'message' => 'Invoice Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('buyerdetails.view')->with($notification) ;
    }

    //deleting the invoice here
    public function buyerdetailsDelete($id) {
        $deleteInvoiceData = invoice::find($id) ;
        $deleteInvoiceData->delete() ;
        $notification = array(
            'message' => 'Invoice Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('buyerdetails.view')->with($notification) ;

    }

    //managing the Equipment Request From users
    public function buyerdetailsEquipmentRequest() {
        $userData = user::all()->where('usertype','user') ;
        $productData = product::all() ;
        $productData = product::latest()->get() ; //fetching data in incresing order with latest
        return view('backend.buyerdetails.view_equipmentrequest', compact(['userData', 'productData'])) ;
    }



    //new view for managing the equipment based on user [[ *******************  ]]
    public function buyerdetailsEquipmentRequestUser() {
        $userData = user::all()->where('usertype','user') ;
        $productData = product::all() ;
        $productData = product::latest()->get() ; //fetching data in incresing order with latest
        return view('backend.buyerdetails.view_userbasesequipmentrequest', compact(['userData', 'productData'])) ;

    } //==^^

   //geting the data from user request based on user id [new view]
    public function buyerdetailsEquipmentRequestView($id) {
        $userData = User::find($id) ;
        $usernameData = $userData->name ;
        $productData = product::all()->where("Product_username" , $userData->name) ; //fetching data in incresing order with latest
        return view('backend.buyerdetails.view_equipmentrequest', compact(['userData', 'productData'])) ;

    }//[[ *******************  ]]
   

    //editing the buyer data here [view page]
    public function buyerdetailsRequestEdit($id) {
        $data = product::find($id) ;
        $mainmachineData = mainmachine::all() ;
        $submachineData = submachine::all() ;
        $quantityData = range(1,50) ;
        return view('backend.buyerdetails.edit_requestproduct' , compact( ['data', 'mainmachineData' , 'submachineData' , 'quantityData']) ) ;
    }

    //posting the updated data here
    public function buyerdetailsRequestUpdate(Request $request, $id) {
        $updatedData = product::find($id) ;
        $updatedData->product_main_machine = $request->product_main_machine ;
        $updatedData->product_sub_machine = $request->product_sub_machine ;
        $updatedData->product_quantity = $request->product_quantity ;
        $updatedData->phone_number = $request->phone_number ;
        $updatedData->product_message = $request->product_message ;
        $updatedData->save() ;
        $notification = array(
            'message' => 'User Details Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('buyerdetails.viewEquipmentRequestUser')->with($notification) ;

    }

    //deleting the user request for equipment here
    public function buyerdetailsRequestDelete($id) {
        $deleteData = product::find($id) ;
        $deleteData->delete() ;
        $notification = array(
            'message' => 'User Request Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('buyerdetails.viewEquipmentRequest')->with($notification) ;

    }

    //approving of denieg the status of the request here
    public function buyerdetailsRequestStatus($id) {
        $data = product::find($id) ;
        return view('backend.buyerdetails.Approverequest_equipment' , compact('data')) ;
    }

    //post data
    public function buyerdetailsRequestStatusUpdate(Request $request,$id) {
        $updatedData = product::find($id) ;
        $updatedData->request_status = $request->request_status ;
        $updatedData->save() ;
        $notification = array(
            'message' => 'User Requested Deal Status Updated  Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('buyerdetails.viewEquipmentRequestUser')->with($notification) ;
        // return back()->with($notification) ;
        

    }

    //Get the view of Pro Forma upload page here
    public function buyerdetailsProforma() {
        $mainmachinename = mainmachine::all() ;
        $subMachineData = submachine::all() ;
        $userData = User::all()->where('usertype','user') ;
        return view('backend.buyerdetails.add_proforma' , compact( ['mainmachinename' , 'subMachineData' ,'userData']) ) ;

    }

    //POST=> Pro Forma invoice here
    public function buyerdetailsStoreProForma(Request $request) {
        $invoiceData = new proforma() ;
        $invoiceData->username = $request->username ;
        $invoiceData->main_machine_name = implode(',' , $request->main_machine_name) ;
        $invoiceData->sub_machine_name = implode( ',' ,$request->sub_machine_name) ;
        $invoiceData->total_price = $request->total_price ;

        $upload_invoice = array() ;
        if($multi_image_filess = $request->file('upload_invoice')) {
            foreach($multi_image_filess as $multi_image_file) {
                $multi_image_name = md5(rand(1000 , 10000)) ;
                $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                $multi_image_full_name = $multi_image_name.'.'.$ext ;
                $upload_path = 'upload/upload_pro_forma/' ;
                $multi_image_url = $upload_path.$multi_image_full_name ;
                $multi_image_file->move(public_path('upload/upload_pro_forma/'),$multi_image_full_name)  ;
                $upload_invoice[] = $multi_image_url ;
                $invoiceData->upload_invoice = implode('|' , $upload_invoice) ;
            }
        }
        //upload brochure end here
        // $invoiceData->invoice_status = $request->invoice_status ;
        $invoiceData->save() ;
        $notification = array(
            'message' => 'You Send Pro Forma Invoice succesfully To User',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('buyerdetails.viewproforma')->with($notification) ;
    }

    //view the Pro Forma here
    public function buyerdetailsViewProForma() {
        $datainvoice = proforma::all() ;
        $datainvoice = proforma::latest()->get() ;
        return view('backend.buyerdetails.view_proforma' , ['datainvoice'=>$datainvoice]) ;
    }

    //view the update page of pro forma here
    public function buyerdetailsEditProForma($id) {
        $editinvoiceData = proforma::find($id) ;
        $mainmachinename = mainmachine::all() ;
        $subMachineData = submachine::all() ;
        $userData = User::all()->where('usertype','user') ;
        return view('backend.buyerdetails.edit_proformainvoice' , compact( ['editinvoiceData' , 'mainmachinename' , 'subMachineData' ,'userData']) ) ;
    }

    //updating the Proforma here
    public function buyerdetailsUpdateProForma(Request $request,$id) {
        $invoiceupdatedata = proforma::find($id) ;
        $invoiceupdatedata->username = $request->username ;
        $invoiceupdatedata->main_machine_name = implode(',' , $request->main_machine_name) ;
        $invoiceupdatedata->sub_machine_name = implode( ',' ,$request->sub_machine_name) ;
        $invoiceupdatedata->total_price = $request->total_price ;
                // <<====UPDATING INVOICE HERE=====>>
                $upload_invoice = array() ;
                if($multi_image_filess = $request->file('upload_invoice')) {
                    foreach($multi_image_filess as $multi_image_file) {
                        $multi_image_name = md5(rand(1000 , 10000)) ;
                        $ext = strtolower($multi_image_file->getClientOriginalExtension()) ;
                        $multi_image_full_name = $multi_image_name.'.'.$ext ;
                        $upload_path = 'upload/upload_pro_forma/' ;
                        $multi_image_url = $upload_path.$multi_image_full_name ;
                        $multi_image_file->move(public_path('upload/upload_pro_forma/'),$multi_image_full_name)  ;
                        $upload_invoice[] = $multi_image_url ;
                        $invoiceupdatedata->upload_invoice = implode('|' , $upload_invoice) ;
                    }
                }
                //UPDATING INVOICE END HERE
        // $invoiceupdatedata->invoice_status = $request->invoice_status ;
        $invoiceupdatedata->save() ;
        $notification = array(
            'message' => 'Proforma Invoice Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('buyerdetails.viewproforma')->with($notification) ;
    }

    //delete the Performa Invoice here
    public function buyerdetailsDeletePerformaInvoice($id) {
        $deleteInvoiceData = proforma::find($id) ;
        $deleteInvoiceData->delete() ;
        $notification = array(
            'message' => 'User Proforma Invoice Deleted Successfully',
            'alert-type' => 'error'
        ) ;
        return redirect()->route('buyerdetails.viewproforma')->with($notification) ;
    }

}
