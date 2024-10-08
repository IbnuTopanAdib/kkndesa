<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        // if ( request('search')){
        //     $posts->where('title','like','%'.request('search').'%')->orWhere('body','like','%'.request('search').'%');
        // }
        

        return view('blog', [
            "title" => "Semua berita" ,
            "posts" => Post::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }


    public function show(Post $posts)
    {

        return view('post', [
            "title" => "Singlepost",
            "post" => $posts
        ]);
    }
}
