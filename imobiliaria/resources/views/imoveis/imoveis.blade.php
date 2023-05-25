@extends('layouts.main')


@section('tittle','Agil Imoveis')

@section('content')

            <div id="search-container" class="col-md-12">
                <h2>Pesquise por imoveis</h2>
                <form action="/imoveis" method="GET">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
                </form>
            </div>
            <br>
            <br>
            <h1 class="titulo_pagina_imoveis">Imóveis</h1>
            @if($search)
                <h2>Buscando por: {{ $search}}</h2>
            @endif
                <div class="card_imovel">
                @foreach($imoveis as $imovel)           
                        <img src="/images/exemplo_imovel.jpg" alt="{{ $imovel->titulo }}" class="exemplo_imovel">                   
                        <h2>{{ $imovel->titulo }}</h2>
                        <h3>Diária: {{ $imovel->val_diaria }}</h3>
                        <h4>{{ $imovel->descricao }}</h4>
                        <a href="/imoveis/{{ $imovel->id }}" class="btn btn-primary">Ver imovel</a>
                        <br>    
                        <br>
                @endforeach
                </div>
            @if(count($imoveis)==0 && $search)
                <h3>Nenhum evento com "{{ $search }}" encontrado. <a href="/imoveis">Ver todos os imóveis</a></h3>
            @elseif(count($imoveis)==0)
                <h3>Não há eventos disponíveis</h3>
            @endif
@endsection