<?php

namespace Modules\Sistema\Entities\Models\Repositories;

use Illuminate\Support\Facades\DB;

class EscolasRepositoryQueryBuilder
{
    public function getAllServicos()
    {
        return DB::table('tb_servicos')->where('tipo_servico', '=', 'A')->get();
    }

    public function getAllServicosFuncionalidades()
    {
        $servicos = $this->getAllServicos();

        foreach($servicos as $servico) 
        {
            $servico->funcionalidades = $this->getFuncionalidadesServico($servico->id_servico);
        }

        return $servicos;
    }

    public function getFuncionalidadesServico($id)
    {
        return DB::table('tb_funcionalidades')->where('id_fk_servico', '=', $id)->get();
    }

    public function getAllServicosEscola($id)
    {
        return DB::table('tb_servicos_escola')->join('tb_funcionalidades_servico', 'id_servico_escola', 'id_fk_servico_escola')->where('escola', '=', $id)->get();
    }

    public function addServicosEscola($servicos, $id_escola)
    {
        $escola = DB::table('tb_escolas')->where('id_escola', '=', (int) $id_escola)->get();

        if($escola->isEmpty())
        {
            throw new \Exception("Algo de errado ocorreu, tente novamente.");
        }

        DB::table('tb_servicos_escola')->where('escola', '=', $id_escola)->delete();

        foreach($servicos as $id => $funcionalidades) 
        {
            $id_servico_escola = DB::table('tb_servicos_escola')->insertGetId([
                'escola'  => $id_escola,
                'servico' => $id
            ]);

            foreach($funcionalidades as $funcionalidade)
            {
                $this->addFuncionalidadesServico($funcionalidade, $id_servico_escola);
            }
        }
    }

    public function addFuncionalidadesServico($id_funcionalidade, $id_servico)
    {
        DB::table('tb_funcionalidades_servico')->insert([
            'funcionalidade'       => $id_funcionalidade,
            'id_fk_servico_escola' => $id_servico
        ]);
    }

    public function addServicos($request)
    {
        if(!empty($request))
        {
            $arr_servicos_escola = [];

            foreach($request as $key_request => $servico)
            {
                if((int) $key_request)
                {
                    $arr_servicos_escola[$key_request] = $servico;
                }
            }

            $this->addServicosEscola($arr_servicos_escola, $request['id_escola']);
        }
        else
        {
            throw new \Exception("Algo de errado ocorreu, tente novamente.");
        }
    }
}