@extends('layout.layout')

@section('content')
<form action="/edit-post/{{ $post->id }}" class="form edit-post-form container" method="POST">
    @csrf 
    @method('PUT')
    <h1 class="form__title">Edit post</h1>
    <div class="form__field">
        <label for="title" class="form__label">Title</label>
        <input type="text" class="form__input" name="title" value="{{ $post->title }}">
    </div>
    <div class="form__field">
        <label for="body" class="form__label">Body</label>
        <textarea name="body" class="form__input" wrap="balance" cols="30" rows="15">{{ $post->body }}</textarea>
    </div>
    <button class="btn btn--primary">Save Changes</button>
</form>
    
@endsection

