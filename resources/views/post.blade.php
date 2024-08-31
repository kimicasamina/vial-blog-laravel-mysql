@extends('layout.layout')

@section('content')
<div class="read-post">
    <div class="post container">
        <h1 class="post__title">{{ $post['title'] }} by {{ $post->user->name }}</h1>
        <p class="post__body">{{ $post['body'] }}</p>
        
    </div>

</div>

@endsection