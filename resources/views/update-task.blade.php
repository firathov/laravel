@extends('layouts.app')

@section('title-block')
    Update Task
@endsection

@section('content')
    <form method ="POST" action = "{{route('updateOne-submit', $update->id)}}">
        @csrf
        <h2>Update Task</h2>
        <p>User's name: <input type="text" name="user" value="{{$update->user}}" id = "user"></p>
        <p>Task description:<input  type="text" name="desc" value="{{$update->desc}}" id = "desc"></p>
        <input type = "submit" value="Update Task">
    </form>
@endsection
