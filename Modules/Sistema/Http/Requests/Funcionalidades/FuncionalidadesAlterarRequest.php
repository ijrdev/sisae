<?php

namespace Modules\Sistema\Http\Requests\Funcionalidades;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Modules\Sistema\Entities\Models\Repositories\FuncionalidadesRepository;
use Modules\Sistema\Entities\Models\Repositories\ServicosRepository;

class FuncionalidadesAlterarRequest extends FormRequest
{
    private $funcionalidadesRepository;
    private $servicosRepository;

    public function __construct(FuncionalidadesRepository $funcionalidadesRepository, ServicosRepository $servicosRepository)
    {
        $this->funcionalidadesRepository = $funcionalidadesRepository;
        $this->servicosRepository        = $servicosRepository;
    }

    public function rules()
    {
        Validator::extend('check_funcionalidade_servico', function($attribute, $value, $parameters)
        {
            $funcionalidade          = $this->funcionalidadesRepository->getFuncionalidade($this->id_funcionalidade);
            $funcionalidades_servico = $this->servicosRepository->getServico($funcionalidade->id_fk_servico)->funcionalidades;

            if($this->nome_func == $funcionalidade->nome_func)
            {
                return true;
            }
            else
            {
                foreach($funcionalidades_servico as $funcionalidade)
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
            'id_funcionalidade' => 'required',
            'nome_func'         => 'required|min:3|max:20|check_funcionalidade_servico',
            'label_func'        => 'required|min:3|max:50'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'nome_func.check_funcionalidade_servico' => 'Funcionalidade já existente no serviço.'
        ];
    }
}
