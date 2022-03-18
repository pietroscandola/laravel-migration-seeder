@extends('layouts.main')

@section('title', 'Home')

@section('content')
    @foreach ($trains as $train)
        {{$train->company}}
    
    @endforeach

@endsection