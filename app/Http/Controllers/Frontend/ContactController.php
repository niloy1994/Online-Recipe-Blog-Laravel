<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\user;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller{

    public function contact(){
        return view('frontend.contact.contact');
    }

    public function send_message(){
        $to = "niloy@gmail.com";
        $name=Input::get('name');
        $subject = Input::get('subject');
        $txt = Input::get('message');
        $email=Input::get('email');
        $headers = "From:".$email." \r \n" ;
        /*echo '<pre>';
        print_r($headers);
        die;*/

        mail($to,$name,$subject,$txt,$headers);

    }





}