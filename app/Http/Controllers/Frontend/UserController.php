<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\category;
use App\Model\comment;
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

class UserController extends Controller{
    public  function my_account(){
        $user=new user();

        $user->name=Session::get('user')['user_name'];
        $user->id=Session::get('user')['user_id'];
        $recipes=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id WHERE recipes.uploaded_by=$user->id") ;
        $total_recipes=count($recipes);

        $favorites=DB::select("SELECT recipes.*,recipe_image.image,(SELECT count(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes ,
                    (SELECT count(id) FROM comment WHERE comment.recipe_id=recipes.id) as num_of_comments  FROM recipes
                    LEFT JOIN recipe_image ON recipe_image.recipe_id = recipes.id LEFT JOIN likes ON likes.recipe_id = recipes.id
                    WHERE likes.user_id=$user->id") ;
        /*echo'<pre>';
        print_r($favorites);
        die;*/
        $total_favorites=count($favorites);




        return view('Frontend.login.home',array('user' => $user,
                                                'recipes'=>$recipes,
                                                'favorites'=>$favorites,
                                                'total_recipes'=>$total_recipes,
                                                'total_favorites'=>$total_favorites));

    }

}