<?php

namespace Modules\Sistema\Http\Requests\Funcionalidades;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Modules\Sistema\Entities\Models\Repositories\ServicosRepository;

class FuncionalidadesCadastrarRequest extends FormRequest
{
    private $servicosRepository;

    public function __construct(ServicosRepository $servicosRepository)
    {
        $this->servicosRepository = $servicosRepository;
    }

    public function rules()
    {
        Validator::extend('check_servico_funcionalidade', function($attribute, $value, $parameters)
        {
            $servico_funcionalidades = $this->servicosRepository->getServico($this->servico)->funcionalidades;
            
            if($servico_funcionalidades->isEmpty())
            {
                return true;
            }
            else
            {
                foreach($servico_funcionalidades as $funcionalidade)
                {
                    if($this->nome_func == $funcionalidade->nome_func)
                    {
                        return false;
                    }
                }

                return true;
            }
        });

        return [
            'servico'   => 'required|check_servico_funcionalidade',
            'nome_func'  => 'required|min:3|max:20',
            'label_func' => 'required|min:3|max:50'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'servico.check_servico_funcionalidade' => 'O serviço escolhido já tem essa funcionalidade.'
        ];
    }
}
