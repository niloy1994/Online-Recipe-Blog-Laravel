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
        $total_member=DB::table('users')
            ->select(DB::raw('COUNT(users.id) as num_of_members' ))
            ->get();

        $total_recipe=DB::table('recipes')
            ->select(DB::raw('COUNT(recipes.id) as num_of_recipes' ))
            ->get();

        $total_blog=DB::table('blogs')
            ->select(DB::raw('COUNT(blogs.id) as num_of_blogs' ))
            ->get();

        $total_comment=DB::table('comment')
            ->select(DB::raw('COUNT(comment.id) as num_of_comments' ))
            ->get();

        /*$total_recipe_image=DB::table('recipe_image')
            ->select(DB::raw('COUNT(recipe_image.id) as num_of_recipe_image'))
            ->get();



        $total_blog_image=DB::table('blog_image')
            ->select(DB::raw('COUNT(blog_image.id) as num_of_blog_image'))
            ->get();


        $total_photos= $total_recipe_image+ $total_blog_image;*/

        $total_photo= DB::select("SELECT (SELECT count(id) FROM recipe_image as num_of_recipe)+
                    (SELECT count(id) FROM blog_image as num_of_blog) as total_count");




        return view('Frontend.home.index',array('recipes' => $recipes,
                                                'categories'=>$categories,
                                                'users'=>$users,
                                                'recipe_of_the_day'=>$recipe_of_the_day,
                                                'user_of_the_day'=>$user_of_the_day,
                                                'total_member'=>$total_member,
                                                'total_recipe'=>$total_recipe,
                                                'total_blog'=>$total_blog,
                                                'total_comment'=>$total_comment,
                                                'total_photo'=>$total_photo

        ));
    }



}