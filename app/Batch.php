<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public $table = "batches";

    protected $fillable = ['code','name','obs','estado','status','id_tool','id_brand'];
}
