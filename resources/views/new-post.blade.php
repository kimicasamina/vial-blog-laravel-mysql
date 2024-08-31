@extends('layout.layout')

@section('content')
    <form action="/create-post" class="form add-post-form container" method="POST">
        <h1 class="form__title">Create a New Post</h1>
        @csrf
        <div class="form__field">
            <label for="title" class="form__label">Title</label>
            <input type="text" class="form__input" name="title" placeholder="post title...">
        </div>
        <div class="form__field">
            <label for="body" class="form__label">Body</label>
            <textarea name="body" placeholder="body content..." class="form__input" wrap="balance" cols="30" rows="20"></textarea>
        </div>
        <button type="submit" class="btn btn--primary">Save Post</button>
    </form>
    
@endsection
