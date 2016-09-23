<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\user;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller{

    public function login(){
        return view('frontend.login.login');
    }

    public function sign_up(){
        return view('frontend.login.sign_up');
    }

    function save(){
        $rules = [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5',
            'password_confirmation' => 'min:5|same:password',
            //'status'=>'required',
        ];

        $validator = Validator::make(Input::all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $name = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');
       // $status = Input::get('status');


        $user = new user();
        $user->name = $name;
        $user->email = $email;
        $user->password =$password;
        //$user->status = $status;
        $user->save();
        return redirect('/sign_up');
    }


    function check_login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $user = user::where("email", '=', $email)
            ->where("password", '=', $password)
            ->get();
        if (count($user) > 0) {
            $userArr = array('user_id' => $user[0]->id, 'user_email' => $user[0]->email, 'user_name' => $user[0]->name);
            Session::put('user', $userArr);
            /*echo '<pre>';
            print_r($userArr);
            die;*/
            return redirect('/');

        }
        else {
            return redirect()->back()->withErrors(['Invalid email/password']);;
        }
    }

    function logout(){
        Session::flush();
        return redirect('/');
    }



}