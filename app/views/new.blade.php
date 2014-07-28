@extends('layouts.main')

@section('content')
    @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
    
    {{ Form::open(array('autocomplete' => 'off')) }}
        {{ Form::label('url', 'Username') }}
        {{ Form::text('name', null) }}

        {{ Form::button('Ingresar', array('type' => 'submit')) }}


    {{ Form::close() }}
@stop