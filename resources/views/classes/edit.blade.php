@extends('layouts.admin')
 
@section('title', 'Edit Product')
 
@section('contents')

<h1>edit a product</h1>
<form action="{{route('classes.update', $class->id)}}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">level:</label>
        <input type="number" name="level" id="" value="{{$class->level}}">
    </div>
    <br>
    <div>
        <label for="">section:</label>
        <input type="text" name="section" id="" value="{{$class->section}}">
    </div>
    <br>
    <div>
        <input class="btn btn-primary" type="submit" name="" id="" value="update">
    </div>
</form>
@endsection