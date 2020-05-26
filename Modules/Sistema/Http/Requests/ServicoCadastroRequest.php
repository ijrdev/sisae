<?php

namespace Modules\Sistema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoCadastroRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_servico'  => 'required|unique:tb_servicos|min:3|max:20',
            'label_servico' => 'required|min:3|max:20',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}