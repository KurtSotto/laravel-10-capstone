@extends('layouts.admin')
@section('title', 'classes')

@section('contents')
<h1>add a class</h1>

<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>

<form action="{{route('classes.store')}}" method="post">
    @csrf
    @method('post')

    <div>
        <label for="">level:</label>
        <input type="number" name="level" id="">
    </div>
    <br>
    <div>
        <label for="">section:</label>
        <input type="text" name="section" id="">
    </div>

    <br>

    <br>
    <div>
        <input type="submit" value="add class">
    </div>
    
</form>
@endsection