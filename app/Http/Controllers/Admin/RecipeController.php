<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\category;
use App\Model\country;
use App\Model\ingredients;
use App\Model\nutrition;
use App\Model\procedures;
use App\Model\recipe;
use App\Model\recipe_image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DateTime;
use DB;

use App\Http\Requests;

class RecipeController extends Controller
{
    function add()
    {
        $categories = category::all();
        $countries = country::all();
        return view('admin.recipe.add', array('categories' => $categories, 'countries' => $countries));
    }

    function save()
    {
        /* echo "<pre>";
         print_r($_POST);
         die;*/
        $rules = [
            'name' => 'required',
        ];

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $name = Input::get('name');
        $category = Input::get('category');
        $country = Input::get('country');
        $type = Input::get('type');
        $description = Input::get('description');
        $preparation_time = Input::get('preparation_time');
        $cooking_time = Input::get('cooking_time');
        $difficulty = Input::get('difficulty');
        $serves = Input::get('serves');
        $video = Input::get('video');
        //ingredients
        $ingredient_names = Input::get('ingredient_name');
        $ingredient_amounts = Input::get('ingredient_amount');
        $ingredient_units = Input::get('ingredient_unit');

        //procedures
        $procedures = Input::get('process');

        //nutrition
        $nutrition_names = Input::get('nutrition_name');
        $nutrition_amounts = Input::get('nutrition_amount');
        $nutrition_units = Input::get('nutrition_unit');


        //media
        $recipe_images = Input::file('image');
//        echo '<pre>';
//        print_r($recipe_images);
//        die;
        $fileCountIcon = count($recipe_images);


        /* echo '<pre>';
         print_r($procedures);
         die;*/


        $recipe = new recipe();
        $recipe->name = $name;
        $recipe->category_id = $category;
        $recipe->country_id = $country;
        $recipe->type = $type;
        $recipe->description = $description;
        $recipe->preparation_time = $preparation_time;
        $recipe->cooking_time = $cooking_time;
        $recipe->difficulty = $difficulty;
        $recipe->serves = $serves;
        $recipe->video = $video;

        $now = date("Y-m-d H:i:s");

        $recipe->upload_time=$now;


        if ($recipe->save()) {
            for ($i = 0; $i < count($ingredient_names); $i++) {
                $name = $ingredient_names[$i];
                $amount = $ingredient_amounts[$i];
                $unit = $ingredient_units[$i];

                $ingredient = new ingredients();
                $ingredient->recipe_id = $recipe->id;
                $ingredient->amount = $amount;
                $ingredient->unit = $unit;
                $ingredient->name = $name;
                $ingredient->save();
            }

            for ($j = 0; $j < count($procedures); $j++) {
                $process = $procedures[$j];


                $procedure = new procedures();
                $procedure->recipe_id = $recipe->id;
                $procedure->process = $process;

                $procedure->save();
            }

            for ($k = 0; $k < count($nutrition_names); $k++) {
                $name = $nutrition_names[$k];
                $amount = $nutrition_amounts[$k];
                $unit = $nutrition_units[$k];

                $nutrition = new nutrition();
                $nutrition->recipe_id = $recipe->id;
                $nutrition->amount = $amount;
                $nutrition->unit = $unit;
                $nutrition->name = $name;
                $nutrition->save();
            }

            if ($fileCountIcon != 0) {
                foreach ($recipe_images as $img) {
                    $destinationPath = 'public/images/recipe'; // upload path
                    $extension = $img->getClientOriginalExtension(); // getting image extension
                    $fileName = str_replace(' ', '', $name) . "_" . rand(0, 100) . '.' . $extension;
                    $img->move($destinationPath, $fileName);
                    $recipe_image = new recipe_image();
                    $recipe_image->recipe_id = $recipe->id;
                    $recipe_image->image = $fileName;
                    $recipe_image->save();
                }

            }



        }

        $recipe->save();
        return redirect('/admin/recipes');
    }

    function recipes()
    {
        $recipes = recipe::paginate(10);
        return view('admin.recipe.recipes', array('recipes' => $recipes));
    }

    function recipe_select()
    {
        $recipes = recipe::all();
        return view('admin.recipe.recipe_of_the_day', array('recipes' => $recipes));

    }

    function recipe_of_the_day()
    {


        $recipe_of_the_day = Input::get('recipe');
        $recipe= recipe::find($recipe_of_the_day);
        $previous=DB::table('recipes')
                  ->where('recipe_of_the_day', 1)
                  ->update(['recipe_of_the_day' => 0]);

        $recipe->recipe_of_the_day=1;
        $recipe->save();
        return redirect('/admin/recipes');



    }

    function edit($id)
    {
        $recipes = recipe::find($id);
        $categories = category::all();
        $countries = country::all();
        $recipe_image = recipe_image::where('recipe_id', '=', $id)->get();
        $ingredients = ingredients::where('recipe_id', '=', $id)->get();
        $procedures = procedures::where('recipe_id', '=', $id)->get();
        $nutrition = nutrition::where('recipe_id', '=', $id)->get();
        $type = array('regular', 'special');
        $difficulty = array('easy', 'medium', 'hard');
        return view('admin.recipe.edit',

            array('recipe' => $recipes,
                'categories' => $categories,
                'countries' => $countries,
                'type' => $type,
                'difficulty' => $difficulty,
                'recipe_image' => $recipe_image,
                'ingredients' => $ingredients,
                'procedures' => $procedures,
                'nutrition' => $nutrition
            )
        );
    }


    function update()
    {

        $id = Input::get('id');
        $name = Input::get('name');
        $category = Input::get('category');
        $country = Input::get('country');
        $type = Input::get('type');
        $description = Input::get('description');
        $preparation_time = Input::get('preparation_time');
        $cooking_time = Input::get('cooking_time');
        $difficulty = Input::get('difficulty');
        $serves = Input::get('serves');
        $video = Input::get('video');

        //ingredients
        $ingredient_names = Input::get('ingredient_name');
        $ingredient_amounts = Input::get('ingredient_amount');
        $ingredient_units = Input::get('ingredient_unit');

        //procedures
        $procedures = Input::get('process');

        //media
        $recipe_image = Input::file('image');
        $fileCountIcon = count($recipe_image);

        $recipe = recipe::find($id);
        $recipe->name = $name;
        $recipe->category_id = $category;
        $recipe->country_id = $country;
        $recipe->type = $type;
        $recipe->description = $description;
        $recipe->preparation_time = $preparation_time;
        $recipe->cooking_time = $cooking_time;
        $recipe->difficulty = $difficulty;
        $recipe->serves = $serves;
        $recipe->video = $video;

        ingredients::where('recipe_id','=',$id)->delete();
        procedures::where('recipe_id','=',$id)->delete();

        if ($recipe->save()) {
            for ($i = 0; $i < count($ingredient_names); $i++) {
                $name = $ingredient_names[$i];
                $amount = $ingredient_amounts[$i];
                $unit = $ingredient_units[$i];

                $ingredient = new ingredients();
                $ingredient->recipe_id = $recipe->id;
                $ingredient->amount = $amount;
                $ingredient->unit = $unit;
                $ingredient->name = $name;
                $ingredient->save();
            }

            for ($j = 0; $j < count($procedures); $j++) {
                $process = $procedures[$j];


                $procedure = new procedures();
                $procedure->recipe_id = $recipe->id;
                $procedure->process = $process;

                $procedure->save();
            }

            if ($fileCountIcon != 0) {

                    $destinationPath = 'public/images/recipe'; // upload path
                    $extension = $recipe_image->getClientOriginalExtension(); // getting image extension
                    $fileName = str_replace(' ', '', $name) . "_" . rand(0, 100) . '.' . $extension;
                    $recipe_image->move($destinationPath, $fileName);
                    $recipe_img = recipe_image::where('recipe_id','=',$id)->first();
                    $recipe_img->recipe_id = $recipe->id;
                    $recipe_img->image = $fileName;
                    $recipe_img->save();


            }
        }

        return redirect('/admin/recipes');
    }

    function delete($id)
    {
        $recipe = recipe::find($id);
        $recipe->delete();
        return redirect('/admin/recipes');
    }
}

