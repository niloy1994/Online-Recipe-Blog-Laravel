<?php

namespace App\Http\Controllers\Admin;
use App\Model\country;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use App\Http\Requests;

class CountryController extends Controller
{
    function add(){
        return view('admin.country.add');
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

        $country = new country();
        $country->name = $name;


        $country->save();
        return redirect('/admin/countries');
    }

    function countries(){
        $countries = country::all();
        /*print_r($categories);
        die;*/
        return view('admin.country.countries',array('countries'=>$countries));
    }

    function edit($id){
        $country = country::find($id);
        return view('admin.country.edit',array('country'=>$country));
    }


    function update()
    {

        $id = Input::get('id');
        $name = Input::get('name');

        $country = country::find($id);
        $country->name = $name;
        $country->save();
        return redirect('/admin/countries');
    }

    function delete($id)
    {
        $country = country::find($id);
        $country->delete();
        return redirect('/admin/countries');
    }
}
