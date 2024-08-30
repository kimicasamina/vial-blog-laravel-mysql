@extends('layout.layout')


@section('content')
    <div id="app" class="container" >
        <div class="posts">
            @auth
                <h1 class="">All Posts</h1>
                @else 
                <h1 class="">Latest Posts</h1>
            @endauth
            @foreach ($posts as $post)
            <a class="posts__item" href="/post/{{ $post->id }}">
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
            </a>
            
            @endforeach
        </div>
        

    </div>
@endsection
