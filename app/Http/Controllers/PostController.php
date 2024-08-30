<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // 
    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = Auth::id();
        Post::create($incomingFields);
        return redirect('/');
    }

    public function deletePost(Post $post)
    {
        // check if user is authenticated
        if (Auth::id() === $post['user_id']) {
            $post->delete();
        }

        return redirect('/');
    }

    public function showPost(Post $post)
    {
        // check if user is authenticated
        if (Auth::id() !== $post['user_id']) {
            return redirect('/');
        }


        return view('edit-post', ['post' => $post]);
    }

    public function editPost(Post $post, Request $request)
    {
        // check if user is authenticated
        if (Auth::id() !== $post['user_id']) {
            return redirect('/');
        }

        // validate inputs 
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        // remove whitespace
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        // update post instance
        $post->update($incomingFields);

        // redirect to home
        return redirect('/');
    }
}
