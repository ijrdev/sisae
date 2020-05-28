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
    protected $dates = ['dt_cadastro'];
    public $timestamps = false;

    public function usuarioMaster()
    {
        // return $this->hasOne()
    }
}
