<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form method="post" action="{{route('login.action')}}">
        @csrf
        @if ($errors->any())
        <div>
            <strong >Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li><span >{{ $error }}</span></li>
                @endforeach
            </ul>
        </div>
        @endif

        <div>
            <label for="">email:</label>
            <input type="email" name="email" id="">
        </div>

        <div>
            <label for="">password:</label>
            <input type="password" name="password" id="">
        </div>

        <div>
            <input type="checkbox" name="remember" id="">
            <label for="">remember me</label>
        </div>

        <div>
            <input type="submit" name="" id="">
        </div>
    </form>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, consectetur minima hic mollitia accusantium molestiae sunt doloremque explicabo? Tempore molestias natus dicta tenetur quidem! Nihil facilis aspernatur consequuntur a impedit?</p>
    <p>dont have an account yet? <a href="{{route('register')}}">Sign up</a></p>
</body>
</html>