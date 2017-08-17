@extends('main.layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$article['title']}}</h1>
    </div>
    <div class="col-md-12">
        {{$article['description']}}
    </div>

@stop