<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\machineController ;
use App\Http\Controllers\subMachineController ;
use App\Http\Controllers\buyerdetailsController ;   
use App\Http\Controllers\userdashboardController ;
use App\Http\Controllers\userProfileController ;
use Illuminate\Support\Facades\Auth ;
use App\Http\Controllers\userProductController ;
use App\Http\Controllers\userInvoiceController ;
use App\Http\Controllers\assignProductController ;
use App\Http\Controllers\myProductsController ;
use App\Models\mainmachine;
use App\Models\submachine ; 
use Symfony\Component\HttpFoundation\Session\Session ;
use App\Models\User;
use Illuminate\Support\Facades\Hash ;
use App\Models\invoice ;
use App\Models\product;
use Illuminate\Support\Facades\DB ;
use App\Models\assignproduct ;
use App\Http\Controllers\insurancRequestController ;
use App\Models\proforma ;
Use App\Http\Controllers\userPerformaInvoiceController ;
use App\Http\Controllers\website\websitecontroller ;
use App\Http\Controllers\ManageDealersController ;
use App\Models\dealer;
use Illuminate\Support\Facades\Artisan ;
use App\Http\Controllers\ManageMainCategoryForMachineController ;
use App\Models\main_category ;
use Illuminate\Validation\Rules\Unique;
use App\Http\Controllers\AdminWebsiteSERVICESController ;
use App\Http\Controllers\ManageAdminWebsiteMachineRequestsController ;
use App\Http\Controllers\AdminManagePartsCOntroller ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
||
||
back rout start here
||
||
*/
Route::group(['middleware' => 'prevent-back-history'],function(){
    // Auth::routes();
    // Route::get('/home', 'HomeController@index');

  /*
||
||
back rout end here
||
||
*/

//redirect route after login
Route::get('redirects' , [AdminController::class , 'loginRedirects'])->middleware('admin') ;

// Route::get('user', function () {
//     return view('welcome');
// });

//website first page load here
Route::get('/', function () {
    // return view('auth.login');
    // $data = mainmachine::all()->take(8) ;
    $data = main_category::all()->take(8) ;
    return view('website.index' , compact(['data'])) ;
});


//authentication
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.index' );
})->name('dashboard')->middleware('admin');

Route::get('login'  , [UserController::class , 'loginPageRoute'])->name('login') ;



Route::get('dashboard' ,
function() {
    $userData = user::all()->where('usertype','user')->count() ;
    $mainmachineData = mainmachine::all()->count() ;
    $submachineData = submachine::all()->count() ;
    $requestData = product::all()->count() ;
    $invoiceData = invoice::all()->count() ;
    $userlimitrdData = User::orderBy('created_at' , 'desc')->where(['usertype'=>'user'  ] )->take(4)->get() ;
    $sellingData = assignproduct::all()->sum('assign_machin_quantitys') ;
    //returning chart data here
    
    $chartData = assignproduct::all()  ; 
    $data = "" ;
    foreach($chartData as $val) {
        $data.= "[ '".$val->assign_sub_machin_name."' , $val->assign_machin_quantitys     ]," ;
    }


    // $data = "" ;
    // foreach($chartData as $val) {
    //     $data.= "[ '".$val->product_sub_machine."' , $val->product_quantity ]," ;
    // }
    return view('admin.index' , compact(['userData' , 'mainmachineData' , 'submachineData' , 'requestData' , 'invoiceData' , 'sellingData' , 'userlimitrdData' , 'data' ]) ) ;
}
)->name('dashboard')->middleware('admin') ;


//Logout functionality here--
Route::get('/admin/logout' , [AdminController::class , 'Logout'])->name('admin.logout') ;


//  USER MANAGMENT ALL ROUTES WILL BE HERE
//group for users[xyz]<=-=URLS
Route::prefix('users')->group(function() {
    //view Route for Users
    Route::get('/view' , [UserController::class , 'UserView'])->name('user.view') ;   //user view

    //view all admin here
    Route::get('/viewadmin' , [UserController::class , 'UserViewAllAdmin'])->name('user.viewadmin') ;   //user view


    //ADD user Group Route
    Route::get('/add' , [UserController::class , 'UserAdd'])->name('users.add') ;   

    Route::post('/store' , [UserController::class , 'UserStore'])->name('users.store') ;   

    //edit users
    Route::get('/edit/{id}' , [UserController::class , 'UserEdit'])->name('users.edit') ;   

    Route::post('/update/{id}' , [UserController::class , 'UserUpdate'])->name('users.update') ;   

    //Delete Users
    Route::get('/delete/{id}' , [UserController::class , 'UserDelete'])->name('users.delete') ;   

    //manage requests here
    Route::get('/managerequest' , [UserController::class , 'UserManageRequsts'])->name('user.managerequest') ; 
    
    //manage inacive users
    Route::get('/inactiveusers' , [UserController::class , 'UserInactiveUsers'])->name('user.inactiveusers') ; 

}) ;

//AJAX REQUYEST FOR APPROVING THE USER REQUEST user-approval-request-ajex
Route::post('/user-approval-request-ajex' , [UserController::class , 'AJAXUserRequestAPPROVAL'])->name('user-approval-request-ajex') ; 


//
//GROUP FOR YOUR PROFILE AND CHAANGE PASSWORD 
//
Route::prefix('profile')->group(function() {
    //view Route for Users
    Route::get('/view' , [ProfileController::class , 'ProfileView'])->name('profile.view') ; 

    //EDIT profile
    Route::get('/edit' , [ProfileController::class , 'ProfileEdit'])->name('profile.edit') ;   

    Route::post('/store' , [ProfileController::class , 'ProfileStore'])->name('profile.store') ;   

    //Update Password OR change Password
    Route::get('/password/view' , [ProfileController::class , 'PasswordView'])->name('password.view') ;   

    Route::post('/password/update' , [ProfileController::class , 'PasswordUpdate'])->name('password.update') ;   
}) ;

//
//*************************************************************
//************MANAGE MAIN CATAGORY HERE ***********************
//*************************************************************
//
Route::prefix('/maincategory')->group(function() {
    //Adding main categories
    Route::get('/add' , [ManageMainCategoryForMachineController::class , 'AddMainCatagoryForMachine'])->name('maincategory.add') ; 

    //Store the main category data here
    Route::post('/store' , [ManageMainCategoryForMachineController::class , 'StoreMainCatagoryForMachine'])->name('maincategory.store') ; 

    //view the main categories data here
    Route::get('/view' , [ManageMainCategoryForMachineController::class , 'ViewMainCatagoryForMachine'])->name('maincategory.view') ; 

    //Edit 
    Route::get('/edit/{id}' , [ManageMainCategoryForMachineController::class , 'EditMainCatagoryForMachine'])->name('maincategory.edit') ; 

    //update 
    Route::post('/update/{id}' , [ManageMainCategoryForMachineController::class , 'updateMainCatagoryForMachine'])->name('maincategory.update') ; 

    //delete 
    Route::get('/delete/{id}' , [ManageMainCategoryForMachineController::class , 'DeleteMainCatagoryForMachine'])->name('maincategory.delete') ; 


}) ;
//
//*************************************************************
//************MANAGE MAIN CATAGORY END ***********************
//*************************************************************
//


    //NOW ALL THE MACHINE FUNCTIONALITY 
Route::prefix('/mainmachine')->group(function() {
    //Inserting the machine route
    Route::get('/add' , [machineController::class , 'mainmachineAdd'])->name('mainmachine.add') ;  
    
    Route::post('/store' , [machineController::class , 'mainmachineStore'])->name('mainmachine.store') ;

    //View the machine Route
    Route::get('/view' , [machineController::class , 'mainmachineView'])->name('mainmachine.view') ;  

    //Edit main Machine 
    Route::get('/edit/{id}' , [machineController::class , 'mainmachineEdit'])->name('mainmachine.edit') ;  

    Route::post('/update/{id}' , [machineController::class , 'mainmachineUpdate'])->name('mainmachine.update') ;  

    //delete the Main mAchine
    Route::get('/delete/{id}' , [machineController::class , 'mainmachineDelete'])->name('mainmachine.delete') ;  
})  ;


//SUB MACHINE WORK
Route::prefix('/submachine')->group(function(){
    //add sub machine here
    Route::get('/add' , [subMachineController::class , 'submachineAdd'])->name('submachine.add') ; 
    
    Route::post('/store' , [subMachineController::class , 'submachineStore'])->name('submachine.store') ;

    //view sub machines 
    Route::get('/view' , [subMachineController::class , 'submachineView'])->name('submachine.view') ; 

    //Edit Sub Machine here
    Route::get('/edit/{id}' , [subMachineController::class , 'submachineEdit'])->name('submachine.edit') ; 

    //update sub machine data only
    Route::post('/update/{id}' , [subMachineController::class , 'submachineUpdate'])->name('submachine.update') ;

    //delete sub machine data
    Route::get('/delete/{id}' , [subMachineController::class , 'submachineDelete'])->name('submachine.delete') ;  

}) ;

//
//AJAX REQUESTS// ajax-get-main-machine
//
Route::post('/ajax-get-main-machine' , [subMachineController::class , 'AJAXGETMAINMACHINEDATA'])->name('ajax-get-main-machine') ; 

//


//manage buyer details
Route::prefix('/buyerdetails')->group(function(){
    //send quotation or upload invoice here or buyer details
    Route::get('/add' , [buyerdetailsController::class , 'buyerdetailsAdd'])->name('buyerdetails.add') ; 

    //posting the data from buyingdetails
    Route::post('/store' , [buyerdetailsController::class , 'buyerdetailsStore'])->name('buyerdetails.store') ; 

    //view of buyerdetails here
    Route::get('/view' , [buyerdetailsController::class , 'buyerdetailsView'])->name('buyerdetails.view') ; 

    //Edit the buyer details
    Route::get('/edit/{id}/' , [buyerdetailsController::class , 'buyerdetailsEdit'])->name('buyerdetails.edit') ; 

    //posting the updated data from buyer details
    Route::post('/update/{id}/' , [buyerdetailsController::class , 'buyerdetailsUpdate'])->name('buyerdetails.update') ; 

    //Deleting the invoice here'
    Route::get('/delete/{id}/' , [buyerdetailsController::class , 'buyerdetailsDelete'])->name('buyerdetails.delete') ; 

    //managing the request from users
    Route::get('/viewEquipmentRequest' , [buyerdetailsController::class , 'buyerdetailsEquipmentRequest'])->name('buyerdetails.viewEquipmentRequest') ; 

    //managing The Request From user based on user name
    Route::get('/viewEquipmentRequestUser' , [buyerdetailsController::class , 'buyerdetailsEquipmentRequestUser'])->name('buyerdetails.viewEquipmentRequestUser') ; 

    //now get the view of user  
    Route::get('/requestview/{id}' , [buyerdetailsController::class , 'buyerdetailsEquipmentRequestView'])->name('buyerdetails.requestview') ; 


    //editng the requested equipments here
    Route::get('/requestedit/{id}/' , [buyerdetailsController::class , 'buyerdetailsRequestEdit'])->name('buyerdetails.requestedit') ; 

    //posting the updates from admin side to update the equipments
    Route::post('/requestupdate/{id}/' , [buyerdetailsController::class , 'buyerdetailsRequestUpdate'])->name('buyerdetails.requestupdate') ; 

    //deleting the user request of equipment 
    Route::get('/requestdelete/{id}/' , [buyerdetailsController::class , 'buyerdetailsRequestDelete'])->name('buyerdetails.requestdelete') ; 

    //changing the request stsus here
    Route::get('/requestStatus/{id}/' , [buyerdetailsController::class , 'buyerdetailsRequestStatus'])->name('buyerdetails.requestStatus') ; 

    //posting data  
    Route::post('/requeststatusupdate/{id}/' , [buyerdetailsController::class , 'buyerdetailsRequestStatusUpdate'])->name('buyerdetails.requeststatusupdate') ; 

    //Upload Profoma view here
    Route::get('/proforma' , [buyerdetailsController::class , 'buyerdetailsProforma'])->name('buyerdetails.proforma') ; 

    //uploading or POSTING the Pro Forma invoice here  
    Route::post('/storeproforma' , [buyerdetailsController::class , 'buyerdetailsStoreProForma'])->name('buyerdetails.storeproforma') ; 

    //view Proforma here
    Route::get('/viewproforma' , [buyerdetailsController::class , 'buyerdetailsViewProForma'])->name('buyerdetails.viewproforma') ; 

    //edit Proforma here display view to edit here
    Route::get('/edit_proformainvoice/{id}/' , [buyerdetailsController::class , 'buyerdetailsEditProForma'])->name('buyerdetails.edit_proformainvoice') ; 

    //updating or Posting the pro Forma here updateproforma
    Route::post('/updateproforma/{id}/' , [buyerdetailsController::class , 'buyerdetailsUpdateProForma'])->name('buyerdetails.updateproforma') ; 

    //delete the performa invoice here  deleteperformainvoice
    Route::get('/deleteperformainvoice/{id}/' , [buyerdetailsController::class , 'buyerdetailsDeletePerformaInvoice'])->name('buyerdetails.deleteperformainvoice') ; 

}) ;

//Assign Product Routehere
Route::prefix('assignproduct')->group( function() {
    //adding or Assigningg the product here[primary view]
    Route::get('/add' , [assignProductController::class , 'assignProductAdd'])->name('assignproduct.add') ; 

    //storing the products
    Route::post('/store' , [assignProductController::class , 'assignProductStore'])->name('assignproduct.store') ; 

    //view the data
    Route::get('/view' , [assignProductController::class , 'assignProductView'])->name('assignproduct.view') ; 

        //view the Assignad data besd on user
        Route::get('/userview' , [assignProductController::class , 'assignProductUserView'])->name('assignproduct.userview') ; 

        //view the assigned product bases on user here with id passed here
        Route::get('/requestview/{id}' , [assignProductController::class , 'assignProductUserViewAll'])->name('assignproduct.requestview') ; 


    //edit the assigned products here
    Route::get('/edit/{id}/' , [assignProductController::class , 'assignProductEdit'])->name('assignproduct.edit') ; 

    //updating the data
    Route::post('/update/{id}/' , [assignProductController::class , 'assignProductUpdate'])->name('assignproduct.update') ; 

    //delete the assigned Data here
    Route::get('/delete/{id}/' , [assignProductController::class , 'assignProductDelete'])->name('assignproduct.delete') ; 

}) ;

//insurance claim request 
Route::prefix('claimrequest')->group( function() {
    Route::get('/view' , [insurancRequestController::class , 'claimRequestView'])->name('claimrequest.view') ; 

    //new request view routes here
    Route::get('/newview' , [insurancRequestController::class , 'claimRequestNewView'])->name('claimrequest.newview') ; 

    //approved insurance claim request route here
    Route::get('/approvedview' , [insurancRequestController::class , 'claimRequestApprovedView'])->name('claimrequest.approvedview') ; 

        //denied insurance claim request route here
        Route::get('/deniedview' , [insurancRequestController::class , 'claimRequestDeniedView'])->name('claimrequest.deniedview') ; 


    //edit or approving the insurance request
    Route::get('/edit/{id}' , [insurancRequestController::class , 'claimRequestEdit'])->name('claimrequest.edit') ; 
    
    //approving of disaproving the claim form
    Route::get('/approve/{id}' , [insurancRequestController::class , 'claimRequestApprove'])->name('claimrequest.approve') ; 

    //posting the data here for approving or deny the request of claims fr insurance
    Route::post('/store/{id}' , [insurancRequestController::class , 'claimRequestStore'])->name('claimrequest.store') ; 


}) ;

//Mange Dealers 
Route::prefix('dealers')->group( function() {
    //Add dealer
    Route::get('/add' , [ManageDealersController::class , 'AddManageDealers'])->name('dealers.add') ; 

    //store dealer
    Route::post('/store' , [ManageDealersController::class , 'StoreManageDealers'])->name('dealers.store') ; 

    
});

//
//MANAGES SERVICES REQUEST AT ADMIN PANNEL
//
Route::prefix('service-request')->group( function() {
    //view all the services
    Route::get('/view' , [AdminWebsiteSERVICESController::class , 'ViewAllServicesRequest'])->name('service-request.view') ; 

});

//
//MANAGE WEBSITE MACHINE REQUEST
//
Route::prefix('website-machine-request')->group( function() {
    //view all requests
    Route::get('/view' , [ManageAdminWebsiteMachineRequestsController::class , 'ViewAllWEbsiteMachineRequests'])->name('website-machine-request.view') ; 

}) ;

//
//MANAGE PARTS 
//
Route::prefix('manage-parts')->group( function() {
    //add
    Route::get('/add' , [AdminManagePartsCOntroller::class , 'AddParts'])->name('manage-parts.add') ; 

    //store Parts
    Route::post('/store' , [AdminManagePartsCOntroller::class , 'StorePartsDB'])->name('manage-parts.store') ; 

    //view machine parts
    Route::get('/view' , [AdminManagePartsCOntroller::class , 'ViewParts'])->name('manage-parts.view') ; 


}) ;




//************************************************************ *//
////////////////USERS DASHBOARD ROUTING//////////////////////////
//********************************************************* *//

//loading user index page after login as user
Route::get('userdashboard', function () {
    $idData = Auth::user() ;
    $productRequestNewData = product::all()->where("Product_username" , $idData->name)->count() ;
    $invoiceRequestNewData = invoice::all()->where("username" , $idData->name)->count() ;
    $myproductRequestData = assignproduct::all()->where("username" , $idData->name)->count() ;
    $submachineRequestData = submachine::latest()->take(4)->get() ;

    return view('users_dashboard.index' , compact(['idData' , 'productRequestNewData' , 'invoiceRequestNewData' , 'myproductRequestData' , 'submachineRequestData' ]));
})->name('userdashboard');

Route::get('/userdashboard/logout' , [userdashboardController::class , 'logout'])->name('userdashboard.logout') ;

//manage user profile at userdashbord
Route::prefix('userprofile')->group( function() {
    //view the profile of users
    Route::get('/view' , [userProfileController::class , 'userprofileview'])->name('userprofile.view') ;

    //edit user profile
    Route::get('/edit' , [userProfileController::class , 'userprofileEdit'])->name('userprofile.edit') ;

    //updating the profile
    Route::post('/store' , [userProfileController::class , 'userprofileStore'])->name('userprofile.store') ;

    //view the change password page
    Route::get('/userpassword/view' , [userProfileController::class , 'userPasswordView'])->name('userpassword.view') ;

    //updating the password
    Route::post('/userpassword/update' , [userProfileController::class , 'userPasswordUpdate'])->name('userpassword.update') ;
}) ;


//manage products here [userdashboard]
Route::prefix('userproducts')->group( function() {
    //Adding Request for the products
    Route::get('/addrequest' , [userProductController::class , 'userProductRequestAdd'])->name('userproducts.addrequest') ;

    //submachine route using ajex request here
    Route::get('/GetSubCatAgainstMainCatEdit/{id}' , [userProductController::class , 'GetSubCatAgainstMainCatEdit'])->name('userproducts.GetSubCatAgainstMainCatEdit') ;


    //posting data for request
    Route::post('/store' , [userProductController::class , 'userProductRequestStore'])->name('userproducts.store') ;

    //viw the request
    Route::get('/view' , [userProductController::class , 'userProductRequestView'])->name('userproducts.view') ;

    //edit
    Route::get('/edit/{id}' , [userProductController::class , 'userProductRequestEdit'])->name('userproducts.edit') ;

    //posting the updated data
    Route::post('/edit/{id}' , [userProductController::class , 'userProductRequestUpdate'])->name('userproducts.update') ;

    //deleting the request
    Route::get('/delete/{id}' , [userProductController::class , 'userProductRequestDelete'])->name('userproducts.delete') ;


}) ;

//AJAX REQUEST FOR REQUESTING SUBMACHINE DATA ON MAIN MACHINE REQUEST
Route::post('/get-sub-machine-ajax' , [userProductController::class , 'AJAXUserProductSubmachineDataRequest'])->name('get-sub-machine-ajax') ;


//User invoice Routes here
Route::prefix('userperformainvoice')->group( function() {
    //view all invoice reciver here
    Route::get('/view' , [userPerformaInvoiceController::class , 'userPerformaInvoiceView'])->name('userperformainvoice.view') ;
}) ;


//User invoice Routes here
Route::prefix('userinvoice')->group( function() {
    //view all invoice reciver here
    Route::get('/view' , [userInvoiceController::class , 'userInvoiceView'])->name('userinvoice.view') ;
}) ;

//my products data here
Route::prefix('myproduct')->group( function() {
    //view all invoice reciver here
    Route::get('/view' , [myProductsController::class , 'viewMyProducts'])->name('myproduct.view') ;

    //claim insrance here
    Route::get('/claiminsurance/{id}' , [myProductsController::class , 'myproductClaimInsurance'])->name('myproduct.claiminsurance') ;

    //storing into db the claim data from userdashboard
    Route::post('/addclaiminsurance' , [myProductsController::class , 'MyProductsstoreClaimInsurance'])->name('myproduct.addclaiminsurance') ;

    //clsimlist view here
    Route::get('/claimlist' , [myProductsController::class , 'myProductClaimList'])->name('myproduct.claimlist') ;


}) ;



//************************************************************ *//
////////////////UNICORN WEBSITE ROUTING//////////////////////////
//********************************************************* *//
//main machine list
Route::get('mainmachine' , [websitecontroller::class , 'mainmachinelist'])->name('mainmachine') ;

Route::get('main-machine/{id}' , [websitecontroller::class , 'mainmachinelistData'])->name('main-machine') ;


//submachine
Route::get('submachine/{id}' , [websitecontroller::class , 'submachinelist'])->name('submachine') ;

//submachine details
Route::get('submachinedetail/{id}' , [websitecontroller::class , 'submachinedetails'])->name('submachinedetail') ;

//findealer
Route::get('findealer' , [websitecontroller::class , 'findADealer'])->name('findealer') ;

//about us page here aboutus
Route::get('aboutus' , [websitecontroller::class , 'AboutUs'])->name('aboutus') ;

//Parts and services parts-&-services
Route::get('services' , [websitecontroller::class , 'PartAndServices'])->name('services') ;


//contact us page contact-us
Route::get('contact-us' , [websitecontroller::class , 'ContactUs'])->name('contact-us') ;

//Check if user is loged in or not loginpage
Route::get('loginpage' , [websitecontroller::class , 'checkAuthentication'])->name('loginpage') ;

//Services Request 
Route::post('services-requests' , [websitecontroller::class , 'PostServicesRequest'])->name('services-requests') ;

//POPUP REQUEST STORE
Route::post('popup-request-store' , [websitecontroller::class , 'POPUPRequestStore'])->name('popup-request-store') ;



////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//post project setup
Route::get('/cache' , function() {
    Artisan::Call('cache:clear') ;
}) ;
Route::get('/link' , function() {
    Artisan::Call('storage:link') ;
}) ;


}); //preventing backlogin here [clearing backhistory here don't delete it and also  make routes under this not out side this closing tags]


