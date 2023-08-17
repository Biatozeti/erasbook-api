<?php

namespace App\Http\Controllers;
use App\Http\Requests\cadastrolivrorequest;
use App\Models\livrosmodel;
use Illuminate\Http\Request;

class cadastrolivroController extends Controller
{
    public function create(cadastrolivrorequest $request){
        $cadastrolivro = livrosmodel::create([
  
          'nome do livro' => $request->nomedolivro,
          'resumo' =>$request-> resumo,
          'autor' =>$request->autor,
          'código do livro' =>$request-> códigodolivro,
          'Imagens' =>$request->imagens,
           ]);
           return response()->json([
              "success" =>true,
              "message" => "livro Cadastrado com sucesso",
              "data" => $cadastrolivro
           ],200);
}
}