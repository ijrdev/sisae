<?php

namespace Modules\Sistema\Http\Requests\Escolas;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Modules\Sistema\Entities\Models\Repositories\EscolasRepository;

class EscolasCadastrarRequest extends FormRequest
{
    private $escolasRepository;

    public function __construct(EscolasRepository $escolasRepository)
    {
        $this->escolasRepository = $escolasRepository;
    }

    public function rules()
    {
        Validator::extend('filter_cnpj', function($attribute, $value, $parameters)
        {
            $arr_replace = [
                '.' => '',
                '/' => '',
                '-' => '',
                '(' => '',
                ')' => ''
            ];

            $escola = $this->escolasRepository->getEscolaCNPJ(strtr($this->cnpj, $arr_replace));

            if($escola->isEmpty())
            {
                return true;
            }
                
            return false;
        });

        return [
            'nome_escola'     => 'required|min:10|max:50',
            'cnpj'            => 'required|min:18|filter_cnpj',
            'telefone_escola' => 'required|min:14',
            'endereco_escola' => 'required|min:10|max:50',
            'email_escola'    => 'required|unique:tb_escolas|email:rfc,dns,filter'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'cnpj.filter_cnpj' => 'CNPJ já cadastrado no sistema.'
        ];
    }
}
