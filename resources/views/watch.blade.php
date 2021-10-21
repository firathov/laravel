@extends('layouts.app')

@section('title-block')
    All Tasks
@endsection

@section('content')
    <h1>All tasks</h1>
    @foreach($showAll as $el)
        <div class="alert alert-info">
            <h3>{{$el->user}}</h3>
            <p>{{$el->desc}} </p>
            <a href="{{route('one', $el->id)}}"><button class="btn btn-warning">Details </button></a>
        </div>
    @endforeach
@endsection
