<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  
  <header>
    <div class="nav-left">
      <a href="{{ route('home.index') }}">
        <h1>BLOG</h1>
      </a>
    </div>
    <div class="nav-right">
      @auth
        <a href="{{route('home')}}" class="my_btn">{{ Auth::user() -> name}}</a>
        <form action="{{route('logout')}}" method="post">
          @csrf
          @method('POST')
          <button type="submit" class="my_btn">Logout</button>
        </form>
        @else
        <a href="{{route('home')}}" class="my_btn">Login</a>
        <a href="{{route('register')}}" class="my_btn">Register</a>
      @endauth
    </div>
    
  </header>
  
  <div class="content">
    @yield('content')
  </div>

  <footer>
    <p>Bye Bye</p>
  </footer>

</body>
</html>