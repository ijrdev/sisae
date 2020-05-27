<?php

namespace Modules\Sistema\Entities\Models\Repositories;

use Modules\Sistema\Entities\Models\FuncionalidadesModel;
use Modules\Sistema\Entities\Models\ServicosModel;

class FuncionalidadesRepository
{
    private $funcionalidadesModel;

    public function __construct(FuncionalidadesModel $funcionalidadesModel)
    {
        $this->funcionalidadesModel = $funcionalidadesModel;
    }

    public function getAllFuncionalidades()
    {
        return $this->funcionalidadesModel->all();
    }    

    public function getFuncionalidade($id)
    {
        return $this->funcionalidadesModel->findOrFail($id);
    }  

    public function addFuncionalidade($funcionalidade)
    {
        $this->funcionalidadesModel->create($funcionalidade);
    }
}
