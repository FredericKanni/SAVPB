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


        $julie=  Client::create([ 
            'nom'=> 'julie' ,
            'prenom' => 'thomas',
            'telephone' => '0693901886',
            'mail' => 'juliethomas@gmail.com',
        ]);



        $julie=  Client::create([ 
            'nom'=> 'julie' ,
            'prenom' => 'thomas',
            'telephone' => '0693901886',
            'mail' => 'juliethomas@gmail.com',
        ]);


        $tom=  Client::create([ 
            'nom'=> 'tom' ,
            'prenom' => 'thomas',
            'telephone' => '0693901886',
            'mail' => 'tomthomas@gmail.com',
        ]);



        $marie=  Client::create([ 
            'nom'=> 'marie' ,
            'prenom' => 'thomas',
            'telephone' => '0693901886',
            'mail' => 'mariethomas@gmail.com',
        ]);


        $julia=  Client::create([ 
            'nom'=> 'julia' ,
            'prenom' => 'thomas',
            'telephone' => '0693901886',
            'mail' => 'juliathomas@gmail.com',
        ]);
    
      

    
    }
}
