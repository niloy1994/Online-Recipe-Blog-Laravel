<?php

namespace App\Http\Controllers\Admin;
use App\Model\admin;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function login()
    {
        return view('admin.login.login');
    }

    function check_login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $admin = admin::where("email", '=', $email)
            ->where("password", '=', $password)
            ->get();
        if (count($admin) > 0) {
            $adminArr = array('admin_id' => $admin[0]->id, 'admin_email' => $admin[0]->email, 'admin_name' => $admin[0]->name);
            Session::put('admin', $adminArr);
            /*echo '<pre>';
            print_r($adminArr);
            die;*/
             return redirect('/admin/dashboard');

         }
         else {
             return redirect()->back()->withErrors(['Invalid email/password']);
         }
    }



    function dashboard()
    {
        return view('admin.login.dashboard');

    }

    function logout(){
        Session::flush();
        return redirect('/admin');
    }




}
