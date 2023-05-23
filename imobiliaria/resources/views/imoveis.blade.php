@extends('layouts.main')


@section('tittle','Agil Imoveis')

@section('content')

            <p>{{ $imoveis }}</p>
            @if($busca != '')
                <h4>O usuário está buscando {{ $busca }}</h4>
            @endif

@endsection