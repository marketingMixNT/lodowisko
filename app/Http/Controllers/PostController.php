<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {

      $posts = Post::published()->select('id', 'title', 'slug', 'thumbnail', 'thumbnail_mobile', 'content', 'published_at')->orderBy('published_at', 'desc')->paginate(4);

      return view('pages.blog.index', compact('posts'));
   }

   public function show($slug)
   {
      $post = Post::where('slug', $slug)->firstOrFail();

     
      // Pobierz 4 najnowsze posty, aby mieć pewność, że będziemy mieć 3 posty, nawet po odfiltrowaniu aktualnego
      $posts = Post::published()->orderByDesc('published_at')->take(4)->get();
    
      // Filtrujemy aktualny post
      $filteredPosts = $posts->filter(function ($p) use ($post) {
          return $p->id !== $post->id;
      });
  
      // Jeżeli mamy więcej niż 3 posty po filtracji, obcinamy kolekcję do 3 postów
      $latestPosts = $filteredPosts->take(3);

      return view('pages.blog.show', compact('post', 'latestPosts'));
   }
}
