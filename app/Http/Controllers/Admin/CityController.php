<?php

namespace App\Http\Controllers\Admin;
use App\Model\city;
use App\Http\Controllers\Controller;
use App\Model\country;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

class CityController extends Controller
{
    function add(){
        $countries= country::all();
        return view('admin.city.add',array('countries'=>$countries));
    }
    function save(){
        $rules = [
            'name'=>'required',
        ];

        $validator = Validator::make(Input::all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $name = Input::get('name');
        $country = Input::get('country');

        $city = new city();
        $city->name = $name;
        $city->country_id = $country;


        $city->save();
        return redirect('/admin/cities');
    }

    function cities(){
       /*$cities = city::all();*/
        $cities = city::all();
        return view('admin.city.cities',array('cities'=>$cities));
    }

    function edit($id){
        $countries= country::all();
        $city = city::find($id);
        return view('admin.city.edit',array('city'=>$city),array('countries'=>$countries));
    }


    function update()
    {

        $id = Input::get('id');
        $name = Input::get('name');
        $country = Input::get('country');

        $city = city::find($id);
        $city->name = $name;
        $city->country_id = $country;
        $city->save();
        return redirect('/admin/cities');
    }

    function delete($id)
    {
        $city = city::find($id);
        $city->delete();
        return redirect('/admin/cities');
    }
}
