@extends('layouts.admin')
@section('title', 'admin home')

@section('contents')
    <h1>teacher side</h1>
    <h1>Dashboard</h1>
    <p>Total of Classes: {{ $classCount }}</p>
    <p>Total of Students: {{ $studentCount }}</p>
@endsection