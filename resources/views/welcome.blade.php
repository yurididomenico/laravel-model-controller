@extends('layouts.app')

@section('title-page', 'Movies')

@section('main-content')
    <div class="header">
        <hr>
        <h1>DB Films</h1>
        <hr>
    </div>

    {{-- Records tabella movies del db movies --}}

    <div class="container">
        <div class="row g-3">
            @foreach ($movies as $elem)
                <div class="col-3">
                    <div class="cartaFilm card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h4 class="card-title">{{ $elem['title'] }}</h4>
                                <h6 class="card-text">- {{ $elem['original_title'] }} -</h6>
                                <p class="card-text">Nazionalità: {{ $elem['nationality'] }}</p>
                                <p class="card-text">Data di uscita: {{ $elem['date'] }}</p>
                                <p class="card-text">Voto: {{ $elem['vote'] }}</p>
                            </div>
                            <div>
                                <a href="#" class="pulsante btn btn-danger">Guarda</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
