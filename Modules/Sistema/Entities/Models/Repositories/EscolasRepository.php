<?php

namespace Modules\Sistema\Entities\Models\Repositories;

use Modules\Sistema\Entities\Models\EscolasModel;

class EscolasRepository
{
    private $escolasModel;

    public function __construct(EscolasModel $escolasModel)
    {
        $this->escolasModel = $escolasModel;
    }

    public function getAllEscolas()
    {
        return $this->escolasModel->all();
    }

    public function getEscola($id)
    {
        return $this->escolasModel->findOrFail($id);
    }

    public function getEscolaCNPJ($cnpj)
    {
        return $this->escolasModel->where('cnpj', '=', $cnpj)->get();
    }

    public function addEscola($servico)
    {
        $this->escolasModel->create($servico);
    }

    // public function updateServico($data)
    // {
    //     $servico                = $this->getServico($data['id_servico']);
    //     $servico->nome_servico  = $data['nome_servico'];
    //     $servico->label_servico = $data['label_servico'];
    //     $servico->save();
    // }
}
