<?php

namespace Modules\Sistema\Entities\Models\Repositories;

use Modules\Sistema\Entities\Models\Contracts\ServicosRepositoryContract;
use Modules\Sistema\Entities\Models\ServicosModel;

class ServicosEloquentRepository implements ServicosRepositoryContract
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
        return $this->servicosModel->findOrFail($id);
    }

    public function addServico($servico)
    {
        $this->servicosModel->create($servico);
    }

    public function update($data)
    {
        $servico                = $this->getServico($data['id_servico']);
        $servico->nome_servico  = $data['nome_servico'];
        $servico->label_servico = $data['label_servico'];
        $servico->save();
    }

    public function delete($id)
    {
        $this->servicosModel->destroy($id);
    }
}
