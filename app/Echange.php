<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echange extends Model
{
    protected $table = 'echanges';
    protected $fillable = ['commentaire', 'id_user','id_client','id_echange_type','created_at','updated_at'];
    //public $timestamps = false;


    public function user(){
        return $this ->belongsTo('App\User', 'id_user');
    }

    public function client(){
        return $this ->belongsTo('App\Client', 'id_client');
    }

    public function echangeType(){
        return $this ->belongsTo('App\EchangeTypes', 'id_echange_type');
    }
}
