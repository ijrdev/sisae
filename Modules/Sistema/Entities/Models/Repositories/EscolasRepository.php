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
        return $this->escolasModel->findOrFail((int) $id);
    }

    public function getEscolaCNPJ($cnpj)
    {
        return $this->escolasModel->where('cnpj', '=', $cnpj)->get('cnpj')->first();
    }

    public function addEscola($servico)
    {
        $this->escolasModel->create($servico);
    }

    public function updateEscola($data)
    {
        $escola                  = $this->getEscola((int) $data['id_escola']);
        $escola->nome_escola     = $data['nome_escola'];
        $escola->telefone_escola = $data['telefone_escola'];
        $escola->endereco_escola = $data['endereco_escola'];
        $escola->email_escola    = $data['email_escola'];
        $escola->status_escola   = $data['status_escola'];
        $escola->save();
    }
}