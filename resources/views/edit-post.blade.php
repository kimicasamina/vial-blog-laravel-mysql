<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flask | Edit Post</title>
</head>
<body>
    <div id="app">
        <h1 class="">Edit post</h1>
        <form action="/edit-post/{{ $post->id }}" class="" method="POST">
            @csrf 
            @method('PUT')
            <input type="text" class="" name="title" value="{{ $post->title }}">
            <textarea name="body">{{ $post->body }}</textarea>
            <button class="">Save Changes</button>
        </form>
    </div>
</body>
</html>