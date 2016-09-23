<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\blog;
use App\Model\blog_image;
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

class BlogController extends Controller{

    public function submit_blog(){
        return view('frontend.blog.submit');
    }

    function save()
    {
         /*echo "<pre>";
        print_r($_POST);
        die;*/
       /* $rules = [
            'name' => 'required',
        ];

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }*/


        $title = Input::get('title');
         /*echo '<pre>';
         print_r($title);
         die;*/
        $description = Input::get('description');



        $blog_images = Input::file('image');
//        echo '<pre>';
//        print_r($recipe_images);
//        die;
        $fileCountIcon = count($blog_images);





        $blog = new blog();
        $blog->title = $title;

        $blog->description = $description;

        $now = date("Y-m-d H:i:s");

        $blog->upload_time=$now;
        $blog->uploaded_by=Session::get('user')['user_id'];

        if ($blog->save()) {

            if ($fileCountIcon != 0) {
                foreach ($blog_images as $img) {
                    $destinationPath = 'public/images/blog'; // upload path
                    $extension = $img->getClientOriginalExtension(); // getting image extension
                    $fileName = str_replace(' ', '', $title) . "_" . rand(0, 100) . '.' . $extension;
                    $img->move($destinationPath, $fileName);
                    $blog_image = new blog_image();
                    $blog_image->blog_id = $blog->id;
                    $blog_image->image = $fileName;
                    $blog_image->save();
                }

            }



       }

        $blog->save();

        return redirect('/blogs');

    }

    public function blogs(){


        $blogs= DB::table('blogs')
            ->leftjoin('blog_image','blog_image.blog_id','=','blogs.id')
            ->where('blogs.status', 'published')
            ->get();

         /*echo "<pre>";
         print_r($blogs);
         die;*/
        return view('Frontend.blog.blogs',array('blogs' => $blogs));
        }




    public function view_blog($id){
        /*$categories = category::all();
        $recipes= DB::table('recipes')
            ->leftjoin('recipe_image','recipes.id','=','recipe_image.recipe_id')
            ->leftjoin('procedures','recipes.id','=','procedures.recipe_id')
            ->leftjoin('ingredients','recipes.id','=','ingredients.recipe_id')
            ->select('recipes.*','recipe_image.image','ingredients.*','procedures.*')
            ->get();
        return view('Frontend.recipe.recipe',array('recipes' => $recipes,'categories'=>$categories));*/



        $blogs = blog::find($id);
        $blog_image = blog_image::where('blog_id', '=', $id)->get();
        // $comments = comment::where('recipe_id', '=', $id)->get();
        /*$users= user::all();

        $like_users=DB::table('users')
            ->leftjoin('likes','users.id','=','likes.user_id')
            ->select('users.*','likes.*')
            ->where('likes.recipe_id','=',$id)
            ->get();*/



        //$type = array('regular', 'special');
        //$difficulty = array('easy', 'medium', 'hard');
        /*echo '<pre>';
        print_r($users);
                die;*/

       /* $comments= DB::table('comment')
            ->leftjoin('users','users.id','=','comment.user_id')
            ->select('users.*','comment.*')
            ->where('comment.recipe_id','=',$id)
            ->get();*/
        /*echo'<pre>';
        print_r($comments);
        die;*/
        /*foreach($comments as $comment) {
            $now = date("Y-m-d H:i:s");
            $date1 = $comment->created_at;
            $date2 = $now;

            $diff =$date2 - $date1;
        }*/




        return view('Frontend.blog.blog',
            array('blog' => $blogs,
                               /* 'categories' => $categories,
                                'users'=> $users,
                                'comment'=>$comments,
                                'like_users'=>$like_users,*/


                //'type' => $type,
                //'difficulty' => $difficulty,
                'blog_image' => $blog_image,
                /*'ingredients' => $ingredients,
                'procedures' => $procedures,
                'nutrition'=> $nutrition,*/
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