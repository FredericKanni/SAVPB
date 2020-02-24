<?php

namespace App\Http\Controllers;

use App\Client;
use App\Echange;
use App\Http\Resources\ClientResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

use Illuminate\Support\Collection;

class ClientController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::all('id','nom','prenom');
       // $clients=ClientResource::collection($clients);
        return  view('clients')->with('clients',$clients);
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new ClientResource (Client::find(1)
        ->where('id', '=', $id)
        ->first());
$echanges = Echange::all()
->where('id_client', '=', $id)
;



       // return   $client ;
       return  view('ficheClient')->with('client',$client)->with('echanges',$echanges);
    }
}
