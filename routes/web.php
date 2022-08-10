<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post category: $category->name",
        'posts' => $category->post->load('category', 'author')
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post category',
        'categories' => Category::all()
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('Posts', [
        'title' => "Post by $author->name",
        'posts' => $author->post->load('category', 'author')
    ]);
});
