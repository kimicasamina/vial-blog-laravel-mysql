@extends('layout.layout')

@section('content')
    <div class="container">
        <h1 class="">{{ $post['title'] }} by {{ $post->user->name }}</h1>
        <p class="">{{ $post['body'] }}</p>
        
        @auth
            <div class="posts__menu">
                <a href="/edit-post/{{ $post->id }}" class="btn-sm">Edit</a>
                <form action="/delete-post/{{ $post->id }}" class="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-sm">Delete</button>
                </form>
            </div>
        @endauth
    </div>
@endsection