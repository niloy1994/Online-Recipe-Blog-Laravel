<?php

namespace App\Http\Controllers\Admin;

use App\Model\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    function add(){
        return view('admin.category.add');
    }
    function save(){
        $rules = [
            'name'=>'required',
            'description'=>'required',
            'icon'=>'required',
            'image'=>'required',
        ];

        $validator = Validator::make(Input::all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $name = Input::get('name');
        $description = Input::get('description');
        $icon = Input::get('icon');
        $image = Input::file('image');
        $fileCountIcon = count($image);





        $category = new category();
        $category->name = $name;
        $category->description = $description;
        $category->icon = $icon;
        if ($fileCountIcon != 0) {
            $destinationPath = 'public/images/category'; // upload path
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $fileName = str_replace(' ', '', $name) . "_" . rand(0, 100) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $category->image =$fileName;
        }

        $category->save();
        return redirect('/admin/categories');
    }

    function categories(){
        $categories = category::all();
        /*print_r($categories);
        die;*/
        return view('admin.category.categories',array('categories'=>$categories));
    }

    function edit($id){
        $category = category::find($id);
        return view('admin.category.edit',array('category'=>$category));
    }


    function update()
    {

        $id = Input::get('id');
        $name = Input::get('name');
        $description = Input::get('description');
        $icon = Input::get('icon');
        $image = Input::file('image');
        $fileCountIcon = count($image);



        $category = category::find($id);
        $category->name = $name;
        $category->description = $description;
        $category->icon = $icon;
        if ($fileCountIcon != 0) {
            $destinationPath = 'public/images/category'; // upload path
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $fileName = str_replace(' ', '', $name) . "_" . rand(0, 100) . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $category->image =$fileName;
        }
        $category->save();
        return redirect('/admin/categories');
    }

    function delete($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect('/admin/categories');
    }
}
