@extends('layouts.main')


@section('tittle','Agil Imoveis')

@section('content')

    <div id="event-create-container" class="col-md-5 offset-md-3">
        <h1>Cadastre seu imóvel</h1>
        <form action="/imoveis" method="POST">
            @csrf
            <div class="form-group">
                <label for="tittle">Título do imóvel:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do imóvel">
            </div>
            <div class="form-group">
                <label for="tittle">Valor da diária:</label>
                <input type="text" class="form-control" id="valorDiaria" name="valorDiaria" placeholder="Ex: 1500">
            </div>
            <div class="form-group">
                <label for="tittle">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="12345-67">
            </div>
            <div class="form-group">
                <label for="tittle">Descrição:</label>
                <textarea name="descricao" id="descricao" class="form-control" placeholder="Ex: Ótimo ambiente, arborizado e aconchegante..."></textarea>
            </div>
            <div class="form-group">
                <label for="tittle">Características:</label>
                <input type="text" class="form-control" id="caracteristicas" name="caracteristicas" placeholder="Ex: Rampa para acesso de deficientes, adega climatizada...">
            </div>
            <div class="form-group">
                <label for="tittle">Máximo de pessoas:</label>
                <input type="text" class="form-control" id="maximoPessoas" name="maximoPessoas" placeholder="Ex: 5">
            </div>
            <div class="form-group">
                <label for="tittle">Mínimo de dias:</label>
                <input type="text" class="form-control" id="minimoDias" name="minimoDias" placeholder="Ex: 2">
            </div>
            <input type="submit" class="btn_cadastrar" value="Cadastrar imóvel">
        </form>
    </div>
    <br>
    <br>
@endsection