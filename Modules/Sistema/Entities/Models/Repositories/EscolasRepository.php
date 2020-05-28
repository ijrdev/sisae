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

    // public function getServico($id)
    // {
    //     return $this->servicosModel->findOrFail($id);
    // }

    // public function addServico($servico)
    // {
    //     $this->servicosModel->create($servico);
    // }

    // public function updateServico($data)
    // {
    //     $servico                = $this->getServico($data['id_servico']);
    //     $servico->nome_servico  = $data['nome_servico'];
    //     $servico->label_servico = $data['label_servico'];
    //     $servico->save();
    // }

    // public function deleteServico($id)
    // {
    //     $this->servicosModel->destroy($id);
    // }
}
