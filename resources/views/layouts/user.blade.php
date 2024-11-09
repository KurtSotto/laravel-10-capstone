<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="border border-1 border-black d-flex justify-content-between w-100 px-5">
        <a href="{{url('/')}}">home</a>
        @if (Route::has('login'))
        @auth
        <div>
            <a href="{{ url('/profile') }}">settings</a>
            <a href="{{ url('/logout') }}">logout</a>
        </div>
        @else
        <div>
            <a href="{{ route('login') }}">login</a>
        
        @if(Route::has('register'))
            <a href="{{route('register')}}">register</a>
        </div>
        @endif
        @endauth
        @endif
    </nav>

    <div>
        @yield('contents')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>