<?php

namespace App\Http\Controllers;
use App\Http\Requests\cadastrolivrorequest;
use App\Models\Livro;
use App\Models\livrosmodel;
use Illuminate\Http\Request;

class cadastrolivroController extends Controller
{
    public function create(cadastrolivrorequest $request){
        $cadastrolivro = Livro::create([
  
          'nomeDoLivro' => $request->nomeDoLivro,
          'resumo' =>$request-> resumo,
          'autor' =>$request->autor,
          'codigoDoLivro' =>$request-> codigoDoLivro,
          'Imagens' =>$request->imagens,
           ]);
           return response()->json([
              "success" =>true,
              "message" => "livro Cadastrado com sucesso",
              "data" => $cadastrolivro
           ],200);
}
public function pesquisarPorId($id){
  return Usuario::find($id)
 }
}