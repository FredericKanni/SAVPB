<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echange extends Model
{
    protected $table = 'echanges';
    protected $fillable = ['commentaire'];



    public function user(){
        return $this ->belongsTo('App\User', 'id_user');
    }

    public function client(){
        return $this ->belongsTo('App\Client', 'id_client');
    }

    public function echangeType(){
        return $this ->belongsTo('App\Type', 'id_echange_type');
    }
}
