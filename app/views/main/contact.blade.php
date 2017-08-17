@extends('main.layout')

@section('content')

    <div class="col-md-12">
        <h1>{{$pageName}}</h1>
    </div>

    <div class="col-md-12">
        <ul class="errors">
            @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
            @endforeach
        </ul>
        {{ Form:: open() }}
        <div class="form-group">
                {{ Form:: label ('Name', 'Name*') }}
                {{ Form:: text ('name', '', array('placeholder' => 'Name', 'class' => 'form-control', 'id' => 'formGroupExampleInput' )) }}
            </div>
            <div class="form-group">
                {{ Form:: label ('Message', 'Message*') }}
                {{ Form:: textarea ('message', '', array('placeholder' => 'Message', 'class' => 'form-control', 'id' => 'exampleTextarea', 'rows' => '3' )) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Send', array('class' => 'btn btn-primary')) }}
            </div>
        {{ Form:: close() }}
    </div>

@stop