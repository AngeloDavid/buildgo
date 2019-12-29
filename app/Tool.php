<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    public $table = "tools";

    protected $fillable = ['name','codeabr','stock','sequence','status','id_group'];
}
