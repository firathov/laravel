@extends('layouts.app')

@section('title-block')
    Insert
@endsection

@section('content')
    <form method ="POST" action = "{{route('inserting')}}">
        @csrf
        <h2>Add Task for User</h2>
        <p>User's name: <input type="text" name="user" id = "user"></p>
        <p>Task description:<input  type="text" name="desc" id = "desc"></p>
        <input type = "submit" value="Add Task">
    </form>
@endsection
