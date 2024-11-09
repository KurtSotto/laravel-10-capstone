<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{route('register.save')}}" method="post">
        <div>
            @csrf
            <div>
                <label for="">name:</label>
                <input type="text" name="name" id="">
                @error('name')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="">email:</label>
                <input type="email" name="email" id="">
                @error('email')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="">password:</label>
                <input type="password" name="password" id="">
                @error('password')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="">confirm password:</label>
                <input type="password" name="password_confirmation" id="">
                @error('password_confirmation')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div>
                <input type="checkbox" required>
                <label for="">i accept the <a href="#">terms and conditions</a></label>
            </div>

            <div>
                <input type="submit" name="" id="" value="create an account">
            </div>
        </div>
    </form>

    <p>already have an account? <a href="{{route('login')}}">login here</a></p>
</body>
</html>