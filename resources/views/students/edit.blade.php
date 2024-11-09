@extends('layouts.admin');
@section('title', 'students')
@section('contents')

<h1>Edit a student</h1>


<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>

<form action="{{route('student.update', $student->id)}}" method="post">
    @csrf
    @method('put')

    <div>
        <label for="">first name:</label>
        <input type="text" name="first" id="" value="{{$student->first}}">
    </div>
    <br>
    <div>
        <label for="">last name:</label>
        <input type="text" name="last" value="{{$student->last}}">
    </div>

    <br>
    
    <div>
    <label for="options">Select class:</label>
    <select name="class_id" id="class_id">
        @foreach($classes as $class)
            <option value="{{ $class->id }}" {{ $class->id == $student->class_id ? 'selected' : '' }}>
                {{ $class->level }} - {{ $class->section }}
            </option>
        @endforeach
    </select>
    </div>

    <br>
    <div>
        <input type="submit" value="update student">
    </div>
    
</form>


@endsection