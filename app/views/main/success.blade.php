@extends('main.layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
    </div>

    <div class="col-md-12">
        Thank You, {{Session::get('name')}}
    </div>

@stop