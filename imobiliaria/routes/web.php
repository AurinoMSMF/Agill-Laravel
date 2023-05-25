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

use App\Http\Controllers\ImovelController;

Route::get('/', [ImovelController::class, 'index']);

Route::get('/imoveis/locar', [ImovelController::class, 'locar']);

Route::get('/imoveis/cadastrar', [ImovelController::class, 'cadastrarImovel']);

Route::get('/imoveis', [ImovelController::class, 'verImoveis']);

Route::get('/imoveis/{id?}', [ImovelController::class, 'verImovelUnico']);

Route::post('/imoveis', [ImovelController::class, 'store']);
