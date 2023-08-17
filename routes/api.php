<?php

use App\Http\Controllers\cadastrolivroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::post('livros',
[cadastrolivroController::class, 'livros']);