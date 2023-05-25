@extends('layouts.main')


@section('tittle','Agil Imoveis')

@section('content')

            <img src="/images/exemplo_imovel.jpg" alt="imovel">
            <h1>{{ $imovel->titulo }}</h1>
            <h2>Valor da diária: {{ $imovel->val_diaria }}</h2>
            <h2>Descrição: {{ $imovel->descricao }}</h2>
            <h3>Caracteristicas: {{ $imovel->caracteristicas }}</h3>
            <h2>CEP: {{ $imovel->CEP }}</h2>
            <h4>Postado: {{ date('d/m/Y', strtotime($imovel->created_at)) }}</h4>


@endsection