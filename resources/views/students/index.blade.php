@extends('layouts.admin')
@section('title', 'classes')

@section('contents')
<h1>List of students</h1>

<a href="{{route('student.create')}}">add a student</a>

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
        <td>id</td>
        <td>first</td>
        <td>last</td>
        <td>class</td>
        <td>actions</td>
    </tr>
    
    @foreach ($students as $stud)
        <tr>
            <td>{{$stud->id}}</td>
            <td>{{$stud->first}}</td>
            <td>{{$stud->last}}</td>
            <td>{{$stud->level}} - {{$stud->section}}</td>
            <td> 
            <a href="{{route('student.edit', $stud->id)}}">Edit</a> 
            <form action="{{route('student.destroy', $stud->id)}}" method="POST" onsubmit="return confirm('Delete?')" >
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
</table>

@endsection