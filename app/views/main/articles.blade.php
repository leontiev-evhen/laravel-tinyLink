@extends('main.layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
    </div>
    <ul>
    @foreach ($articles as $key=>$article)
        <li><a href="{{URL::to('/article')}}/{{$key}}">{{ $article['title'] }}</a></li>
    @endforeach
    </ul>
@stop
