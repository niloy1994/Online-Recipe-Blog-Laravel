<?php

namespace App\Http\Controllers\Admin;
use App\Model\blog;
use App\Model\blog_image;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use DB;

class BlogController extends Controller
{
    function blogs()
    {
        $blogs= DB::table('blogs')
            ->leftjoin('blog_image','blog_image.blog_id','=','blogs.id')
            ->get();
        return view('admin.blog.blogs', array('blogs' => $blogs));

    }

    public function view_blog($id){
        $blogs = blog::find($id);
        $blog_image = blog_image::where('blog_id', '=', $id)->get();
        $status = array('pending', 'published','rejected');
        return view('Admin.blog.blog',
            array('blog' => $blogs,
                'blog_image'=>$blog_image,

                'status' => $status,

            )
        );
    }

    public function change_blog($id){
        $blogs = blog::find($id);
        $status = array('pending', 'published','rejected');
        return view('Admin.blog.change_status',
            array('blog' => $blogs,

                'status' => $status,

            )
        );
    }

    function change_status()
    {


        $id = Input::get('id');
        $status = Input::get('status');


        $blog = blog::find($id);
        $blog->status = $status;

        $blog->save();

        return redirect('/admin/blogs');

    }
}