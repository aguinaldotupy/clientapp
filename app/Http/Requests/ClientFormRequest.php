<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|min:3|max:100',
            'email'             => 'max:50',
            'ddd_phone'         => 'max:3',
            'phone'             => 'max:8',
            'ddd_cel'           => 'max:3',
            'cel'               => 'max:9',
            'description'       => 'min:3|max:1000',
        ];
    }

    //Mensagens personalizadas para validação de erros
    public function messages ()
    {
        return [
            'name.required'         => 'O campo NOME é de preenchimento obrigatório',
            'ddd_phone'             => 'Forma correta de preencher é 011 (Subtitua o 11 pelo ddd de sua região)',
            'phone.min'             => 'O campo TELEFONE precisa ser preenchido de forma correta.',
            'ddd_cel'               => 'Forma correta de preencher é 011 (Subtitua o 11 pelo ddd de sua região)',
            'cel.min'               => 'O campo CELULAR precisa ser preenchido de forma correta.',
            'description.min'       => 'Não use abreviações para descrever sua solicitação',
        ];
    }
}
