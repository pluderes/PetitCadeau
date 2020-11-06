<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
	    return view('admin.dashboard');	

    }
    public function dashboard(Request $require){
        $admin_email = $require->admin_email;
        $admin_passwork = md5($require->admin_passwork);

        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_passwork',$admin_passwork)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_name',$result->admin_name);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','User name or passwork is incorrect!');
            return Redirect::to('/admin');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::TO('/admin');
    }
    // public function add_category()
    // {
    // 	return view('page.layout.addcate');
    // }
}
