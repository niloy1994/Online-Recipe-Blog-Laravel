<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\category;
use App\Model\user;
use DB;

class HomeController extends Controller{

    public function index(){
        $categories = category::all();
        $recipes=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id ORDER BY upload_time DESC LIMIT 6");


        $users=DB::table('users')
                ->select('users.*')->take(9)
                ->get();

        $recipe_of_the_day=DB::table('recipes')
            ->leftjoin('recipe_image','recipes.id','=','recipe_image.recipe_id')
            ->select('recipes.*','recipe_image.image')
            ->where('recipe_of_the_day', 1)
            ->get();

        $user_of_the_day=DB::table('users')
            ->where('user_of_the_day', 1)
            ->get();
        /*echo'<pre>';
        print_r($user_of_the_day);
        die;*/

        return view('Frontend.home.index',array('recipes' => $recipes,
                                                'categories'=>$categories,
                                                'users'=>$users,
                                                'recipe_of_the_day'=>$recipe_of_the_day,
                                                'user_of_the_day'=>$user_of_the_day
        ));
    }



}