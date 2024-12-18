<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index () {

    $posts = Post::published()->select('id', 'title', 'slug', 'thumbnail','content' ,'published_at')->orderBy('published_at','desc')->paginate(4);

    return view('pages.blog.index',compact('posts'));
   }

   public function show ($slug) {

    $post = Post::where('slug', $slug)->firstOrFail();

    return view('pages.blog.index',compact('post'));
   }
}
