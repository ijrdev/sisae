<?php

namespace Modules\Sistema\Http\Requests\Servicos;

use Illuminate\Foundation\Http\FormRequest;

class ServicosCadastrarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome_servico'  => 'required|unique:tb_servicos|min:3|max:50',
            'label_servico' => 'required|min:3|max:20'
        ];
    }

    public function authorize()
    {
        return true;
    }
}