<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function loginPageRoute() {
    return view('auth.login');
}

    //user VIEW
    public function UserView() {
        $allData = User::all() ;
        $allData = User::latest()->get()->where("usertype" , "!=" ,"admin") ;

        // $data['allData'] = User::all() ;
       return view('backend.user.view_user' , compact('allData')) ;
    }

    //view all admin here
    public function UserViewAllAdmin() {
        $allData = User::all() ;
        $allData = User::latest()->get()->where('usertype' , "admin") ;

        // $data['allData'] = User::all() ;
       return view('backend.user.view_user' , compact('allData')) ;
    }

    //ADD users 
    public function UserAdd() {
        return view('backend.user.add_user') ;
    }
    //storing updated data
    public function UserStore(Request $request) {
        $validatedData = $request->validate([
            'email'=> 'required|unique:users' ,
            'name' => 'required',
        ]) ;

        $data = new User() ;
        $data->usertype = $request->usertype ;
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->password = bcrypt($request->password);
        $data->save() ;
        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        ) ;
        return redirect()->route('user.view')->with($notification) ;
    }

    //edit users or update users data
    public function UserEdit($id) {
        $editData = User::find($id) ;
        return view('backend.user.edit_user' , compact('editData')) ;
    }

    public function UserUpdate(Request $request , $id) {
        $data = User::find($id) ;
        $data->usertype = $request->usertype ;
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->status = $request->status ;

        $data->save() ;
        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;
    }

    //DELETE USERS 
    public function UserDelete($id) {
        $user = User::find($id) ;
        $user->delete() ;
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
        ) ;
        return redirect()->route('user.view')->with($notification) ;

    }

    //UserManageRequsts here
    public function UserManageRequsts() {
        $userDataReq = User::all()->where('usertype',null)  ;
        return view('backend.user.managerequest' , ['allData'=>$userDataReq]) ;
    }

    public function UserInactiveUsers() {
        $userDataReq = User::all()->where('status','inactive');
        return view('backend.user.inactiveusers' , ['allData'=>$userDataReq]) ;

    }

}
