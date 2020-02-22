<?php

use App\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //desactive les contrainte de foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //supprime les valeur dans / vide  la table
        Client::truncate();
        //reactive les contrainte de foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


factory(Client::class,30)->create();

    
    }
}
