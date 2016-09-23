<?php

namespace App\Http\Controllers\Admin;
use App\Model\user;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use DB;

class UserController extends Controller
{
    function user_select()
    {
        $users = user::all();
        return view('admin.user.user_of_the_day', array('users' => $users));

    }

    function user_of_the_day()
    {


        $user_of_the_day = Input::get('user');
        $user= user::find($user_of_the_day);
        $previous=DB::table('users')
            ->where('user_of_the_day', 1)
            ->update(['user_of_the_day' => 0]);

        $user->user_of_the_day=1;
        $user->save();
        return redirect('/admin/user_select');



    }
}