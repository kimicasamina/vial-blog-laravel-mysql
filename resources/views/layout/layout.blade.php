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
    <main id="app" class="main">
      
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <a class="brand" href="/">
                        <img src="{{ asset('assets/img/vial.png') }}" alt="" class="brand__logo" width="32" height="32">
                        <p class="brand__name" >Vial</p>
                    </a>

                    @auth
                        <div class="cta-links">
                            <a href="/new-post" class="btn btn--base" >
                              
                                Create New Post</a>
                            <form action="/logout" class="" method="POST">
                                @csrf
                            <button class="btn btn--primary">Logout</button>
                            </form>
                        </div>
                    @else
                    <div class="cta-links">
                        <a href="/login" class="btn btn--base">Login</a>
                        <a href="/register" class="btn btn--primary">Register</a>
                        </div>
                    </div>
                    @endauth
                </nav>
    
    
    
                @auth
                <div class="user">
                    <h1 class="user__name">{{ Auth::user()->name }}</h1>
                    <p class="user__about">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis eaque et eum nemo voluptate amet cum provident voluptatem quidem modi soluta ipsum quisquam assumenda nulla itaque sit, harum iusto natus quo. Beatae sed quae quam vero. Quo esse ipsum possimus iure ducimus?  🧑‍🚀🤙👩‍💻🥖</p>
                </div>            
                @endauth
            </div>
            
          
        </header>
        @yield('content')
        <footer class="footer">
            <div class="container">
                Copyright 2024 Vial
            </div>
        </footer>
    </main>
</body>
</html>