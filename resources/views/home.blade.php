@extends('layout.layout')


@section('content')
    <div id="app" class="container" >
        <div class="posts">
            @auth
                <h1 class="posts__heading">All Posts</h1>
                @else 
                <h1 class="posts__heading">Latest Posts</h1>
            @endauth
            @foreach ($posts as $post)
            <div class="post">
                <div class="post__item">

                    <a class="post__link" href="/post/{{ $post->id }}">
                        <h1 class="post___title">{{ $post['title'] }} </h1>
                    </a>
                        
                        @guest
                        <small class="post__details">Created by {{ $post->user->name }} | {{ date_format($post->created_at, "m/d/y") }}</small>
                        @endguest
                        <p class="post__body">{{ substr($post->body, 0, 325) }}...</p>
                        
                        @auth
                            <div class="post__menu">
                                <a href="/edit-post/{{ $post->id }}" class="btn btn--base">Edit</a>
                                <form action="/delete-post/{{ $post->id }}" class="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn--primary">Delete</button>
                                </form>
                            </div>
                        @endauth
                </div>
                                      

            </div>
            
            @endforeach
        </div>
        

    </div>
@endsection
