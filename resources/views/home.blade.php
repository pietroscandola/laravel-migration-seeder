@extends('layouts.main')

@section('title', 'Home')

@section('content')
    @foreach ($trains as$train)
    <div>{{ $train->company}}</div>
    @endforeach

@endsection