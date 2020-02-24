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
$data = [ $users, $EchangeTypes, $clients];
       // return $data;
        return  view('echangeCreate')->with('EchangeTypes',$EchangeTypes)->with('users',$users)->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   


    public function store(Request $request)
    {
      //  Validation des données entrées
        $dataEchange = Validator::make(
            $request->input(),
            [
                'commentaire' => 'required' ,
                 'id_user' => 'required',
                'id_client' => 'required',
                'id_echange_type' => 'required',
                'created_at',
                'updated_at',
              
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreur
            ]
        )->validate();

      

        //Ajout en bdd des données validées par le validator
       $echange = Echange::create($dataEchange );

       
        //Retourne le circuit formaté grace à la ressource
      //  return new EchangeResource($echange);

      return redirect('/echanges/create');
    }


}
