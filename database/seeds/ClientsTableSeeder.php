<?php

use App\Client;
use Illuminate\Database\Seeder;


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
        Client::statement('SET FOREIGN_KEY_CHECKS=0;');
        //supprime les valeur dans / vide  la table
        Client::truncate();
        //reactive les contrainte de foreign key
        Client::statement('SET FOREIGN_KEY_CHECKS=1;');



        $admin=  Client::create([ 
            'nom'=> 'admin' ,
            'prenom'=> 'admin' ,
            'telephone'=> 'admin' ,
            'mail'=> 'admin@admin.com' ,
           
        ]);
    }
}
