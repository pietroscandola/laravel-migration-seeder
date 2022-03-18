@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <div class="d-flex">
            @foreach ($trains as $train)
                <div class="card me-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$train->company}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Stazione di Partenza: {{$train->departure_station}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Stazione di Arrivo: {{$train->arrival_station}}</h6>
                        <p class="card-text">Orario Partenza: {{$train->departure_time}}</p>
                        <p class="card-text">Orario di Arrivo: {{$train->arrival_time}}</p>
                        <p class="card-text">Numero Codice Treno: {{$train->train_code_number}}</p>
                        <p class="card-text">Numero Carrozze: {{$train->carriages}}</p>              
                    </div>
                </div>
    
            @endforeach

        </div>
        
    </div>
    

@endsection