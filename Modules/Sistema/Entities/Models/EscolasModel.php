<?php

namespace Modules\Sistema\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class EscolasModel extends Model
{
    protected $table      = 'tb_escolas';
    protected $primaryKey = 'id_escola';
    protected $fillable   = [
        'nome_escola', 'cnpj', 
        'telefone_escola', 'endereco_escola', 
        'email_escola', 'dt_cadastro', 'status_escola'
    ];
    public $timestamps = false;

    public function usuarioMaster()
    {
        // return $this->hasOne()
    }

    public function setCnpjAttribute($value)
    {
        $arr_replace = [
            '.' => '',
            '/' => '',
            '-' => ''
        ];

        $this->attributes['cnpj'] = strtr($value, $arr_replace);
    }

    public function setTelefoneEscolaAttribute($value)
    {
        $arr_replace = [
            ' ' => '',
            '-' => '',
            '(' => '',
            ')' => ''
        ];

        $this->attributes['telefone_escola'] = strtr($value, $arr_replace);
    }
}
