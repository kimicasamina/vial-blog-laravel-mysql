@extends('layout.layout')

@section('content')
    <div class="create-post container">
        <h1 class="title">Create a New Post</h1>
        <form action="/create-post" class="form" method="POST">
            @csrf
            <input type="text" class="" name="title" placeholder="post title...">
            <textarea name="body" placeholder="body content..."></textarea>
            <button type="submit" class="">Save Post</button>
        </form>
    </div>
@endsection
