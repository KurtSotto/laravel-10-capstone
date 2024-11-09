<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            padding-top: 1em;
            padding-left: 5em;
        }
    </style>
</head>
<body>
    <nav class="position-fixed bg-dark top-0 bottom-0 start-0 d-flex flex-column" style="width: 60px;">
        <a href="{{route('admin.home')}}">home</a>
        <a href="{{route('classes.index')}}">classes</a>
        <a href="{{route('student.index')}}">students</a>
        <a href="{{route('grades.index')}}">grades</a>
        <a href="#">profile</a>
        <a href="{{route('logout')}}">logout</a>
    </nav>

    <div>
        <div>@yield('contents')</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>