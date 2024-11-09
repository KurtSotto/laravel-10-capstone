@extends('layouts.admin')
@section('title', 'grades')

@section('contents')
<h1>Grades</h1>

<a href="">add a grade</a>

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

<h1>nah uh</h1>

@endsection