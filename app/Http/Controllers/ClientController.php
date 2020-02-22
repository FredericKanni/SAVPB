<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Resources\ClientResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

class ClientController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::all();
        $clients=ClientResource::collection($clients);
      

        return  $clients;

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
        return   $client ;
    }
}
