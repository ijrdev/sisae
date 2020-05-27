<?php

namespace Modules\Sistema\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class FuncionalidadesModel extends Model
{
    protected $table      = 'tb_funcionalidades';
    protected $primaryKey = 'id_funcionalidade';
    protected $fillable   = ['nome_func', 'label_func', 'id_fk_servico'];
    public $timestamps    = false;

    public function servico()
    {
        return $this->hasOne(ServicosModel::class, 'id_servico', 'id_fk_servico');
    }
}
