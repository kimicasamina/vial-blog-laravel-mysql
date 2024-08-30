<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vial | Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main class="main">
        <header class="header container">
            <a class="brand" href="/">
                <img src="{{ asset('assets/img/vial.png') }}" alt="" class="brand__logo" width="32" height="32">
                <p class="brand__name" >Vial | Blog</p>
            </a>

            @auth
                <div class="cta-links">
                    <a href="/new-post" class="btn btn--base" >
                      
                        Create New Post</a>
                    <form action="/logout" class="" method="POST">
                        @csrf
                    <button class="btn btn--primary">LOGOUT</button>
                    </form>
                </div>
            @else
            <div class="cta-links">
                <a href="/login" class="btn btn--base">Login</a>
                <a href="/register" class="btn btn--primary">Register</a>
                </div>
            </div>
            @endauth


            @auth
            <div class="user">
                <h1 class="user__name">{{ Auth::user()->name }}</h1>
                <p class="user__about">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus deleniti voluptatibus autem iure nostrum quam, delectus laudantium nisi provident laborum voluptate illum cumque totam beatae dignissimos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quod minima quis.  🧑‍🚀🤙👩‍💻🥖</p>
               
            </div>            
            @endauth
          
        </header>
        @yield('content')
        <footer class="footer container">Copyright 2024 Vial</footer>
    </main>
</body>
</html>