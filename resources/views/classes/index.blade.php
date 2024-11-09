@extends('layouts.admin')
@section('title', 'classes')

@section('contents')
<h1>List of classes</h1>

<a href="{{route('classes.create')}}">add a class</a>

<br>

<strong>
    @if (session() ->has('update'))
        {{session('update')}}
    
    @elseif (session() ->has('delete'))
        {{session('delete')}}
    
    @elseif (session() ->has('created'))
        {{session('created')}}
    @endif
</strong>

<table class="table table-striped w-50">
    <tr>
        <td>class_id</td>
        <td>level</td>
        <td>section</td>
        <td>actions</td>
    </tr>
    
    @foreach ($classes as $class)
        <tr>
            <td>{{$class->id}}</td>
            <td>{{$class->level}}</td>
            <td>{{$class->section}}</td>
            <td> 
            <a href="{{route('classes.edit', $class->id)}}">Edit</a> 
            <form action="{{route('classes.destroy', $class->id)}}" method="POST" onsubmit="return confirm('Delete?')" >
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
</table>

@endsection