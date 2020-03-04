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
      

     $tel= EchangeTypes::create([ 
           'type'=> 'telephone' ,
       ]);

     $mail=  EchangeTypes::create([ 
           'type'=> 'mail' ,
       ]);
    }
}
