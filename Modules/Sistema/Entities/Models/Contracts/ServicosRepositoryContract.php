<?php

namespace Modules\Sistema\Entities\Models\Contracts;

interface ServicosRepositoryContract
{
    public function getAllServicos();
    public function getServico($id);
}
