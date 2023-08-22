<?php

use App\Http\Controllers\cadastrolivroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('create',[cadastrolivroController::class,'create']);
Route::get('/find/{id}',
    [UsuarioController::class, 'pesquisarPorId']);