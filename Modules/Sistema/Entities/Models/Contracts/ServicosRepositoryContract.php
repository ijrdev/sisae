<?php

namespace Modules\Sistema\Entities\Models\Contracts;

interface ServicosRepositoryContract
{
    public function getAllServicos();
    public function getServico($id);
    public function addServico($servico);
    public function update($id);
    public function delete($id);
}