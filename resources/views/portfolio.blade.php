@extends('layout') 

@section('title','Portfolio')
@section('content')
    <h1>PortFolio</h1>

    <ul>
        @forelse($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
        @empty 
        <li>No hay proyecto que mostrar</li>
        @endforelse
    </ul>
@endsection