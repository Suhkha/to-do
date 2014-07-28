@extends('layouts.main')

@section('content')
    <h1>Items <a href="{{ URL::route('new')}}">New</a></h1>
        <ul>
            @foreach($items as $item)
            <li>
                {{ Form::open() }}

                   <input type="checkbox"  onClick="this.form.submit()" {{ $item->done ? 'checked' : '' }} />
                   <input type="hidden" name="id" value="{{ $item->id }}">
                    {{ $item->name }} ( <a href="{{ URL::route('delete', $item->id)}}">x</a> )

                {{ Form::close() }}
            </li>
            @endforeach
        </ul>
@stop