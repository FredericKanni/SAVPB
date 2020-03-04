<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $paula=  User::create([ 
            'nom'=> 'paula' ,
        ]);

        $mia=  User::create([ 
            'nom'=> 'mia' ,
        ]);





        $julie=  User::create([ 
            'nom'=> 'julie' ,
        ]);

        $morgane=  User::create([ 
            'nom'=> 'morgane' ,
        ]);




        $sakura=  User::create([ 
            'nom'=> 'sakura' ,
        ]);
        $pan=  User::create([ 
            'nom'=> 'pan' ,
        ]);

    }
    
}
