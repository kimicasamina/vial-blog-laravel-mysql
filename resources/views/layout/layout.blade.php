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
    <header class="container">
        <a class="brand" href="/">
            <img src="{{ asset('assets/img/vial.png') }}" alt="" class="brand__logo" width="32" height="32">
            <p class="brand__name" >Vial | Personal Blog</p>
        </a>

        @auth
        <div class="user">
            <h1 class="user__name">{{ Auth::user()->name }}</h1>
            <p class="user__about">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus deleniti voluptatibus autem iure nostrum quam, delectus laudantium nisi provident laborum voluptate illum cumque totam beatae dignissimos numquam accusantium debitis distinctio quos praesentium animi.</p>
            <form action="/logout" class="user__logout btn btn-primary" method="POST">
                @csrf
                <button class="">LOGOUT</button>
            </form>
        </div>
            @else
            <div class="cta-links">
                <a href="/login" class="btn btn-base">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </div>
        @endauth
      
    </header>
    @yield('content')
    <footer class="footer container">Copyright 2024 Vial</footer>
</body>
</html>