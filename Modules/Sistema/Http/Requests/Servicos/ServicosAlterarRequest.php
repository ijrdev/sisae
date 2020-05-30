<?php

namespace Modules\Sistema\Http\Requests\Servicos;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Modules\Sistema\Entities\Models\Repositories\ServicosRepository;

class ServicosAlterarRequest extends FormRequest
{
    private $servicosRepository;

    public function __construct(ServicosRepository $servicosRepository)
    {
        $this->servicosRepository = $servicosRepository;
    }

    public function rules()
    {
        Validator::extend('check_servico', function($attribute, $value, $parameters)
        {
            $servicos    = $this->servicosRepository->getAllServicos();
            $nomeServico = $this->servicosRepository->getServico($this->id_servico);
            
            if($nomeServico['nome_servico'] == $this->nome_servico)
            {
                return true;
            }
            else
            {
                foreach($servicos as $servico) 
                {
                    if($this->nome_servico == $servico->nome_servico)
                    {
                        return false;
                    }
                }

                return true;
            }
        });

        return [
            'id_servico'    => 'required',
            'nome_servico'  => 'required|check_servico|min:3|max:50',
            'label_servico' => 'required|min:3|max:20',
            'tipo_servico'  => 'required|min:1|max:1',
            'icon'          => 'required|min:5|max:50'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'nome_servico.check_servico' => 'Existe um serviço cadastrado com o mesmo nome escolhido.'
        ];
    }
}
