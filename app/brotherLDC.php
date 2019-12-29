<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brotherLDC extends Model
{
    public $table = "batches";
    protected $fillable = ['name','lastname','status'];
}
