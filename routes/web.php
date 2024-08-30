<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $posts = [];
    if (Auth::check()) {
        $posts = Post::where('user_id', Auth::id())->get();
    } else {
        $posts = Post::all();
    }
    return view('home', ['posts' => $posts]);
});

Route::get('/login', [UserController::class, 'showLogin']);
Route::get('/register', [UserController::class, 'showRegister']);
Route::get('/new-post', [UserController::class, 'showCreatePost']);



Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// blog post related routes
Route::get('/post/{post}', [PostController::class, 'showPost']);
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditPost']);
Route::put('/edit-post/{post}', [PostController::class, 'editPost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
