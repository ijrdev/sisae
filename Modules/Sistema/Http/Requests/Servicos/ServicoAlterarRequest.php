<?php

namespace Modules\Sistema\Http\Requests\Servicos;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Modules\Sistema\Entities\Models\Contracts\ServicosRepositoryContract;

class ServicoAlterarRequest extends FormRequest
{
    private $servicosRepositoryContract;

    public function __construct(ServicosRepositoryContract $servicosRepositoryContract)
    {
        $this->servicosRepositoryContract = $servicosRepositoryContract;
    }

    public function rules()
    {
        Validator::extend('check', function($attribute, $value, $parameters)
        {
            $servicos    = $this->servicosRepositoryContract->getAllServicos();
            $nomeServico = $this->servicosRepositoryContract->getServico($this->id_servico);
            
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
            'id_servico'  => 'required',
            'nome_servico'  => 'required|check|min:3|max:50',
            'label_servico' => 'required|min:3|max:20'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'nome_servico.check' => 'Existe um serviço cadastrado com o mesmo nome escolhido.'
        ];
    }
}
