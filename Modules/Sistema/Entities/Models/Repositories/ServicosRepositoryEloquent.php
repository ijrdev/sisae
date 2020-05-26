<?php

namespace Modules\Sistema\Entities\Models\Repositories;

use Modules\Sistema\Entities\Models\Contracts\ServicosRepositoryContract;
use Modules\Sistema\Entities\Models\ServicosModel;

class ServicosRepositoryEloquent implements ServicosRepositoryContract
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
}
