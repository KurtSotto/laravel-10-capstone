@extends('layouts.admin')
@section('title', 'classes')

@section('contents')
<h1>add a student</h1>

<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>

<form action="{{route('student.store')}}" method="post">
    @csrf
    @method('post')

    <div>
        <label for="">first:</label>
        <input type="text" name="first" id="">
    </div>
    <br>
    <div>
        <label for="">last:</label>
        <input type="text" name="last" id="">
    </div>

    <br>
    <div>
    <label for="options">Select class:</label>
    <select id="options" name="class_id">
        @foreach ($classes as $class)
            <option value="{{$class->id}}">{{$class->level}} - {{$class->section}}</option>
        @endforeach
    </select>

    </div>
    <br>
    <div>
        <input type="submit" value="add student">
    </div>
    
</form>
@endsection