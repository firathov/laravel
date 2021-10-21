@extends('layouts.app')

@section('title-block')
    {{$showOne->user}}
@endsection

@section('content')
    <h1>{{$showOne->user}}</h1>
        <div class="alert alert-info">
            <h3>{{$showOne->user}}</h3>
            <p>{{$showOne->desc}} </p>
            <a href="{{route('updateOne', $showOne->id)}}"><button class="btn btn-primary">Update</button></a>
            <a href="{{route('deleteOne', $showOne->id)}}"><button class="btn btn-danger">Delete</button></a>
        </div>
@endsection
