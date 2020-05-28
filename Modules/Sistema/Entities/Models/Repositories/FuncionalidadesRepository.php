<?php

namespace Modules\Sistema\Entities\Models\Repositories;

use Modules\Sistema\Entities\Models\FuncionalidadesModel;

class FuncionalidadesRepository
{
    private $funcionalidadesModel;

    public function __construct(FuncionalidadesModel $funcionalidadesModel)
    {
        $this->funcionalidadesModel = $funcionalidadesModel;
    }

    public function getAllFuncionalidades()
    {
        return $this->funcionalidadesModel->with('servico')->get();
    }    

    public function getFuncionalidade($id)
    {
        return $this->funcionalidadesModel->findOrFail($id);
    }  

    public function addFuncionalidade($funcionalidade)
    {
        $this->funcionalidadesModel->create($funcionalidade);
    }

    public function updateFuncionalidade($data)
    {
        $funcionalidade             = $this->getFuncionalidade($data['id_funcionalidade']);
        $funcionalidade->nome_func  = $data['nome_func'];
        $funcionalidade->label_func = $data['label_func'];
        $funcionalidade->save();
    }

    public function deleteFuncionalidade($id)
    {
        $this->funcionalidadesModel->destroy($id);
    }
}
