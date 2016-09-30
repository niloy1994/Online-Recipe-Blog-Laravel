<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\category;
use App\Model\comment;
use App\Model\like;
use App\Model\country;
use App\Model\ingredients;
use App\Model\nutrition;
use App\Model\procedures;
use App\Model\recipe;
use App\Model\recipe_image;
use App\Model\user;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RecipeController extends Controller{

    public function submit_recipe(){
        $categories = category::all();
        return view('frontend.recipe.submit',array('categories' => $categories));
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
        $type = Input::get('type');
        $description = Input::get('description');
        $preparation_time = Input::get('preparation_time');
        $cooking_time = Input::get('cooking_time');
        $difficulty = Input::get('difficulty');
        $serves = Input::get('serves');
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
        $recipe->type = $type;
        $recipe->description = $description;
        $recipe->preparation_time = $preparation_time;
        $recipe->cooking_time = $cooking_time;
        $recipe->difficulty = $difficulty;
        $recipe->serves = $serves;

        $now = date("Y-m-d H:i:s");

        $recipe->upload_time=$now;
        $recipe->uploaded_by=Session::get('user')['user_id'];

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
        return redirect('/recipes');

    }

    public function recipes(){
        $category_id = Input::get('category_id');
        $recipe_name=Input::get('name');
        $ingredient=Input::get('ingredient');


        if(!empty($category_id)){
            $categories = category::all();
            $recipes=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id WHERE recipes.category_id=$category_id");



               /* DB::table('recipes')
                ->leftjoin('recipe_image','recipes.id','=','recipe_image.recipe_id')
                ->select('recipes.*','recipe_image.image')
                ->where('recipes.category_id','=',$category_id)
                ->get();*/
            return view('Frontend.recipe.recipes',array('recipes' => $recipes,'categories'=>$categories));
        }
        else if(!empty($recipe_name)){

            $categories = category::all();
            $recipes=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id WHERE recipes.name='".$recipe_name."'");



               /*$recipes= DB::table('recipes')
                ->leftjoin('recipe_image','recipes.id','=','recipe_image.recipe_id')
                ->select('recipes.*','recipe_image.image')
                ->where('recipes.name','=',$recipe_name)
                ->get();*/

            return view('Frontend.recipe.recipes',array('recipes' => $recipes,'categories'=>$categories));
        }
        else if(!empty($ingredient)){

            $categories = category::all();
            $ingredients = join("','",$ingredient);
            $recipes=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id
                    LEFT JOIN ingredients ON ingredients.recipe_id=recipes.id
                    WHERE ingredients.name IN ('$ingredients')");



            /*$recipes= DB::table('recipes')
             ->leftjoin('recipe_image','recipes.id','=','recipe_image.recipe_id')
             ->select('recipes.*','recipe_image.image')
             ->where('recipes.name','=',$recipe_name)
             ->get();*/

            return view('Frontend.recipe.recipes',array('recipes' => $recipes,'categories'=>$categories));
        }
        else{
            $categories = category::all();
            /*$recipes= DB::table('recipes')
                ->select('recipes.*','recipe_image.image',DB::raw('COUNT(like.id) as num_of_likes' ))
                ->leftjoin('recipe_image','recipe_image.recipe_id','=','recipes.id')
                ->join('like','like.recipe_id','=','recipes.id')
                ->groupBy('like.recipe_id')
                ->get();
             echo "<pre>";
             print_r($recipes);
             die;*/


            /*$likes= DB::table('like')
                ->leftjoin('recipes','recipes.id','=','like.recipe_id')
                ->select('recipes.*','like.*')
                ->get();*/
            $recipes=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id");

            /*echo "<pre>";
            print_r($recipes);
            die;*/


            return view('Frontend.recipe.recipes',array('recipes' => $recipes,'categories'=>$categories));
        }

       /* echo "<pre>";
        print_r($recipes);
        die;*/

    }
    public function search_recipe(){
        $categories = category::all();
        $recipes=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id  LIMIT 12");
        return view('frontend.recipe.search',array('recipes' => $recipes,'categories'=>$categories));
    }
    public function view_recipe($id){
        /*$categories = category::all();
        $recipes= DB::table('recipes')
            ->leftjoin('recipe_image','recipes.id','=','recipe_image.recipe_id')
            ->leftjoin('procedures','recipes.id','=','procedures.recipe_id')
            ->leftjoin('ingredients','recipes.id','=','ingredients.recipe_id')
            ->select('recipes.*','recipe_image.image','ingredients.*','procedures.*')
            ->get();
        return view('Frontend.recipe.recipe',array('recipes' => $recipes,'categories'=>$categories));*/



        $recipes = recipe::find($id);
        $categories = category::all();
        $recipe_image = recipe_image::where('recipe_id', '=', $id)->get();
        $ingredients = ingredients::where('recipe_id', '=', $id)->get();
        $procedures = procedures::where('recipe_id', '=', $id)->get();
        $nutrition = nutrition::where('recipe_id', '=', $id)->get();
       // $comments = comment::where('recipe_id', '=', $id)->get();
        $users= user::all();

        $like_users=DB::table('users')
            ->leftjoin('likes','users.id','=','likes.user_id')
            ->select('users.*','likes.*')
            ->where('likes.recipe_id','=',$id)
            ->get();



        //$type = array('regular', 'special');
        //$difficulty = array('easy', 'medium', 'hard');
/*echo '<pre>';
print_r($users);
        die;*/

        $comments= DB::table('comment')
            ->leftjoin('users','users.id','=','comment.user_id')
            ->select('users.*','comment.*')
            ->where('comment.recipe_id','=',$id)
            ->get();
        /*echo'<pre>';
        print_r($comments);
        die;*/
        /*foreach($comments as $comment) {
            $now = date("Y-m-d H:i:s");
            $date1 = $comment->created_at;
            $date2 = $now;

            $diff =$date2 - $date1;
        }*/




        return view('Frontend.recipe.recipe',
            array('recipe' => $recipes,
                'categories' => $categories,
                'users'=> $users,
                'comment'=>$comments,
                'like_users'=>$like_users,


                //'type' => $type,
                //'difficulty' => $difficulty,
                'recipe_image' => $recipe_image,
                'ingredients' => $ingredients,
                'procedures' => $procedures,
                'nutrition'=> $nutrition,
                /*'date_diff'=>$diff*/
            )
        );


    }

    public function post_comment(){


        $comments = Input::get('comment');
        $user_id = Session::get('user')['user_id'];
        $recipe_id = Input::get('recipe_id');

        $comment = new comment();
        $comment->comment = $comments;
        $comment->recipe_id = $recipe_id;
        $comment->user_id = $user_id;


        $now = date("Y-m-d H:i:s");

        $comment->created_at=$now;

        if($comment->save()){
            return array(
                'status'=>true,
                'msg'=>'Comment Successfully saved'


            );
        }
        else{
            return array(
                'status'=>false,
                'msg'=>'Error'


            );
        }




    }

    public function post_like(){

        $user_id = Session::get('user')['user_id'];
        $recipe_id = Input::get('recipe_id');

        $like = new like();
        $like->recipe_id = $recipe_id;
        $like->user_id = $user_id;


        $now = date("Y-m-d H:i:s");

        $like->created_at=$now;

        if($like->save()){
            return array(
                'status'=>true,
                'msg'=>'Comment Successfully saved'


            );
        }
        else{
            return array(
                'status'=>false,
                'msg'=>'Error'


            );
        }




    }



}