<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetPedido extends Model
{
    public $table = "cab_pedidos";
    protected $fillable = ['CodeDay','voluntary','obs','status','id_cadPedido','id_batch'];
}
