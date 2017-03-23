<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function messages(){
        return [
            'nome.required'=>'Este campo é obrigatório!',
            'nome.min'=>'minimo é 5 caracteres!',
            'nome.max'=>'maximo de 100 caracteres!', 
            'email.required'=>'Este campo email é obrigatório!',          
            'email.max'=>'maximo de 255 caracteres!',
            'email.email'=>'Este e-mail não é valido!',
            'email.unique'=>'Este e-mail já existe na base de dados!',
            'imagem.required'=>'Campo imagem obrigatorio',
            'imagem.mimes'=>'Apenas imagem JPG',
            'numero.num_par'=>'Apenas numeros pares',
            
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'required|min:5|max:100',
            //sometimes só valida quando exitir o name 'email'... como se fosse not isEmpty
            'email'=> 'sometimes|required|max:255|email|unique:users',
            'imagem'=> 'required|mimes:jpeg',
            'numero'=> 'num_par',//mensagem personalidade
        ];
    }
}
