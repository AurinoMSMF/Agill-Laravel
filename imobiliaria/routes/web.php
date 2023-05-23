<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    $teste="testando";
    return view('teste',[
        'teste' => $teste,
    ]);
});

Route::get('/imoveis', function () {
    
    $busca=request('search');

    $imoveis="Mostrando imóveis";
    
    return view('imoveis',[
        'imoveis' => $imoveis,
        'busca' => $busca,
    ]);
});

Route::get('/imoveis/{id?}', function ($id = null) {
    $imovel="Mostrando imovel";
    return view('imovel',[
        'imovel' => $imovel,
        'id' => $id,
    ]);
});