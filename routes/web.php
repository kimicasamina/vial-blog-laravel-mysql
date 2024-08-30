<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    // using the User Auth to retrieve all post related to the curent user
    // $posts = Auth::user()->blogPosts()->latest()->get();
    // $posts = Post::where('user_id', Auth::id());
    // get all user posts
    $posts = Post::where('user_id', Auth::id())->get();
    return view('home', ['posts' => $posts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// blog post related routes
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showPost']);
Route::put('/edit-post/{post}', [PostController::class, 'editPost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
