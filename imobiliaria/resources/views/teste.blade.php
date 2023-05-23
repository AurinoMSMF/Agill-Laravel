@extends('layouts.main')


@section('tittle','Agil Imoveis')

@section('content')

    <h1>LETS GO<h1>
            @if(true)
                <p>dentro da condição LETS GO<p>
                <h1>NOVA VIEW</h1>
                <h2>{{ $teste }}</h2>
            @endif

@endsection