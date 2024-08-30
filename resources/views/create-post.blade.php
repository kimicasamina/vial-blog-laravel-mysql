@extends('layout.layout')

@section('content')
    <div class="container">
        <h3 class="">Create a New Post</h3>
        <form action="/create-post" class="" method="POST">
            @csrf
            <input type="text" class="" name="title" placeholder="post title...">
            <textarea name="body" placeholder="body content..."></textarea>
            <button type="submit" class="">Save Post</button>
        </form>
    </div>
@endsection
