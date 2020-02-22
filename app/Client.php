<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['nom', 'prenom', 'telephone', 'mail'];
    public $timestamps = false;
}
