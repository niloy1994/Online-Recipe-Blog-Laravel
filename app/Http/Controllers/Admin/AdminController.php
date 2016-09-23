<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function add(){
        return view('admin.admin.add');
    }
    function save(){
        $rules = [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5',
            'password_confirmation' => 'min:5|same:password',
            'status'=>'required',
        ];

        $validator = Validator::make(Input::all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $name = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');
        $status = Input::get('status');


        $admin = new admin();
        $admin->name = $name;
        $admin->email = $email;
        $admin->password =$password;
        $admin->status = $status;
        $admin->save();
        return redirect('/admin/admins');
    }

    function admins(){
        $admins = admin::all();
        return view('admin.admin.admins',array('admins'=>$admins));
    }

    function edit($id){
        $admin = admin::find($id);
        $status = array('active','inactive');
        return view('admin.admin.edit',array('admin'=>$admin,'status'=>$status));
    }


    function update()
    {

        $id = Input::get('id');
        $name = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');
        $status = Input::get('status');



        $admin = admin::find($id);
        $admin->name = $name;
        $admin->email = $email;
        $admin->password = $password;
        $admin->status = $status;
        $admin->save();
        return redirect('/admin/admins');
    }

    function delete($id)
    {
        $admin = admin::find($id);
        $admin->delete();
        return redirect('/admin/admins');
    }


}
