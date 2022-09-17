<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome'=>'required',
            'telefone'=>'required|numeric',
            'email'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'nome' => 'Insira seu nome',
            'telefone' => 'Insira um número de telefone válido',
            'email' => 'Insira um email válido'
        ];
    }
}
