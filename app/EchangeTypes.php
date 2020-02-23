<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EchangeTypes extends Model
{
    protected $table = 'echange_types';
    protected $fillable = ['nom'];
    public $timestamps = false;
}
