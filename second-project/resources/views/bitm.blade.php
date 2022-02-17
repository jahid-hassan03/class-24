@extends('master')


@section('title')
    bitm page
@endsection

@section('body')

    <h1>{{$a}}</h1>
    <h1>{{$j}}</h1>
    <h1>{{$email}}</h1>

    @foreach($b as $key => $value)

       @foreach($value as $item)
           <span>{{$item}}</span> <br/>
       @endforeach
       <br/>

    @endforeach

@endsection
