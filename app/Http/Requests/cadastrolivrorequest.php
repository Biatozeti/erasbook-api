<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class cadastrolivrorequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nomeDoLivro' => 'required',
            'resumo' => 'required',
            'codigoDoLivro' => 'required|unique:livros,codigoDoLivro',

        ];
    }

    public function failedvalidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'nomeDoLivro.required' => 'o campo nome é obrigatorio',

            'resumo.required' => 'o campo é obrigatório',

            'autor.required' => 'o campo é obrigatório',

            'codigoDoLivro.required' => 'o campo é obrigatório',




        ];
    }
}
