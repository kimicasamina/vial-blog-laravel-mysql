@extends('layout.layout')

@section('content')
    <div class="container">
        <h1 class="">Edit post</h1>
        <form action="/edit-post/{{ $post->id }}" class="" method="POST">
            @csrf 
            @method('PUT')
            <input type="text" class="" name="title" value="{{ $post->title }}">
            <textarea name="body">{{ $post->body }}</textarea>
            <button class="">Save Changes</button>
        </form>
    </div>
@endsection

