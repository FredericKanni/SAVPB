<?php

use App\EchangeTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class EchangeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //permet de supprimer les seed eistants
       EchangeTypes::truncate();
       DB::statement('SET FOREIGN_KEY_CHECKS=1;');

     $tel= EchangeTypes::create([ 
           'type'=> 'telephone' ,
       ]);

     $mail=  EchangeTypes::create([ 
           'type'=> 'mail' ,
       ]);
    }
}
