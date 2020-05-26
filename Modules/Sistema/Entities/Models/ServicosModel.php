<?php

namespace Modules\Sistema\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class ServicosModel extends Model
{
    protected $table      = 'tb_servicos';
    protected $primaryKey = 'id_servico';
    protected $fillable   = ['nome_servico', 'label_servico'];
    public $timestamps    = false;
}
