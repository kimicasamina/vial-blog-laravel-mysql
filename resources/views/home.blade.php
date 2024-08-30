<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flask | Personal Blog</title>
</head>
<body>
    <div id="app">
        <h1 class="">Flask Blog</h1>
        <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus deleniti voluptatibus autem iure nostrum quam, delectus laudantium nisi provident laborum voluptate illum cumque totam beatae dignissimos numquam accusantium debitis distinctio quos praesentium animi.</p>
        @auth
            <p class="">Congrats you are logged in.</p>
            <form action="/logout" class="" method="POST">
                @csrf
                <button class="">LOGOUT</button>
            </form>

            <div class="">
                <h3 class="">Create a New Post</h3>
                <form action="/create-post" class="" method="POST">
                    @csrf
                    <input type="text" class="" name="title" placeholder="post title...">
                    <textarea name="body" placeholder="body content..."></textarea>
                    <button type="submit" class="">Save Post</button>
                </form>
            </div>

         
            <div class="posts">
                @foreach ($posts as $post)
                <div class="posts__item">
                    <h3 class="">{{ $post['title'] }}</h3>
                    <p class="">{{ $post['body'] }}</p>
                    
                    <div class="posts__menu">
                        <a href="/edit-post/{{ $post->id }}" class="">Edit</a>
                        <form action="/delete-post/{{ $post->id }}" class="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
               
                @endforeach
            </div>

        @else
        <form action="/login" method="POST">
            <h3 class="">LOGIN</h3>
            @csrf
            <div class="form-field">
                <label for="email" class="">Email</label>
                <input type="text" class="" name="email">
            </div>
            <div class="form-field">
                <label for="name" class="">Password</label>
                <input type="text" class="" name="password">
            </div>
            <button type="submit">LOGIN</button>
        </form>

        <form action="/register" method="POST">
            <h3 class="">SIGNUP</h3>
            @csrf
            <div class="form-field">
                <label for="name" class="">Username</label>
                <input type="text" class="" name="name">
            </div>
            <div class="form-field">
                <label for="email" class="">Email</label>
                <input type="text" class="" name="email">
            </div>
            <div class="form-field">
                <label for="name" class="">Password</label>
                <input type="text" class="" name="password">
            </div>
            <button type="submit">SIGNUP</button>
        </form>
        @endauth
        <div class="">
            
        </div>
     
    </div>
</body>
</html>