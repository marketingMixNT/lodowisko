<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('/', [MainController::class,'index'])->name('home');

// Route::get('/aktualnosci', [PostController::class,'index'])->name('blog.index');

Route::get('/aktualnosci', function () {
   
    if (request('page') == 1) {
        return Redirect::to(route('blog.index'), 301);
    }
  
    return app(PostController::class)->index();
})->name('blog.index');


Route::get('/aktualnosci/{slug}', [PostController::class,'show'])->name('blog.show');

Route::get('/polityka-prywatnosci', [MainController::class,'privacyPolicy'])->name('privacyPolicy');


Route::fallback(function () {
    return redirect('/');
});