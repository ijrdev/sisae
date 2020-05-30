<?php

namespace Modules\Sistema\Entities\Models\Repositories;

use Modules\Sistema\Entities\Models\ServicosModel;

class ServicosRepository
{
    private $servicosModel;

    public function __construct(ServicosModel $servicosModel)
    {
        $this->servicosModel = $servicosModel;
    }

    public function getAllServicos()
    {
        return $this->servicosModel->all();
    }

    public function getServico($id)
    {
        return $this->servicosModel->findOrFail((int) $id);
    }

    public function addServico($servico)
    {
        $this->servicosModel->create($servico);
    }

    public function updateServico($data)
    {
        $servico                = $this->getServico((int) $data['id_servico']);
        $servico->nome_servico  = $data['nome_servico'];
        $servico->label_servico = $data['label_servico'];
        $servico->icon          = $data['icon'];
        $servico->tipo_servico  = $data['tipo_servico'];
        $servico->save();
    }

    public function deleteServico($id)
    {
        $this->servicosModel->destroy($id);
    }
}
