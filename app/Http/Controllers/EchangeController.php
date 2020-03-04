<?php

namespace App\Http\Controllers;


use App\Client;
use App\Echange;
use App\EchangeTypes;
use App\Http\Resources\EchangeResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class EchangeController extends Controller
{
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $EchangeTypes=EchangeTypes::all();
        $clients=Client::all();

        return  view('echangeCreate')->with('EchangeTypes',$EchangeTypes)->with('users',$users)->with('clients',$clients);
    }




    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'commentaire' => 'bail|max:300' ,
                       'id_user' => 'bail|required|integer',
                      'id_client' => 'bail|required|integer',
                      'id_echange_type' => 'bail|required|integer',
                      
                      'date'=> 'bail|required|',
        ]
        ,
                [
                    'required' => 'Le champ :attribute est requis', 

                    'commentaire.max'=> 'Le champ :attribute doit fait 300 characteres maximun', 
              
                    'id_user.required' => 'Le champ operateur est requis', 
                    'id_user.integer' => 'Le champ operateur est requis', 
                    
                    'id_client.required' => 'Le champ client est requis', 
                    'id_client.integer' => 'Le champ client est requis', 

                    'id_echange_type.required' => 'Le champ type d\'echange est requis', 
                    'id_echange_type.integer' => 'Le champ type d\'echange est requis', 
                    ]
      
      );

        if ($validator->fails()) {
            return redirect('echanges/create')
                        ->withErrors($validator)
                        ->withInput();
        }

       //Ajout en bdd des données validées par le validator
       $echange = new Echange;
       $echange->commentaire = $request->commentaire;
       $echange->date = $request->date;
       $echange->id_user = $request->id_user;
       $echange->id_client = $request->id_client;
       $echange->id_echange_type = $request->id_echange_type;

      $echange->save();

      return redirect('/echanges/create');
    }

}


