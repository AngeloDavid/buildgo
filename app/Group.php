<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $table = "groups";

    protected $fillable = ['descrip','status'];
}
