@extends('layouts.app')

@section('title-page', 'Movies')

@section('main-content')
    <h1>DB Films</h1>
    {{-- Records tabella movies del db movies --}}

    @foreach ($movies as $elem)
        
        <h2>{{ $elem['title'] }}</h2>

    @endforeach
@endsection


