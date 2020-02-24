@extends('layout')








@section('contenu')


<h1 class="text-center m-5">fiche de {{$client-> prenom}} {{$client-> nom}} </h1>

<div class="container">
    <div class="card mt-3 mb-3" style=" height:15vh">
        <h5 class="card-title text-center my-auto client">
            <div class="row">
                <div class="col-md-3">
                    {{$client-> prenom}}

                </div>
                <div class="col-md-3">
                    {{$client-> nom}}

                </div>
                <div class="col-md-3">
                    {{$client-> telephone}}

                </div>
                <div class="col-md-3">
                    {{$client-> mail}}

                </div>

            </div>
        </h5>
    </div>


<h2 class="text-center m-5" style="font-size:2.5rem">historique des echanges</h2>

<table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">type d'échange</th>
            <th scope="col">operatrice</th>
            <th scope="col">date</th>
            <th scope="col">commentaire</th>
          </tr>
        </thead>

        <tbody>

                @foreach ($echanges as $echange )
                 
                <tr>
                  <th scope="row">{{$echange->id}}</th>
              
                  <td>{{$echange->echangeType->type}}</td>
                  <td>({{$echange->id_user}})     {{$echange->user->nom}} </td>
              
                  <td>{{$echange->created_at}}    </td>
                  <td>{{$echange->commentaire}}  </td>
                </tr>
                @endforeach 

       
         
        </tbody>
      </table>

    </div>
@endsection