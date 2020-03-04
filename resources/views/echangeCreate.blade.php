@extends('layout')



@section('contenu')


<h1 class="text-center">Ajouter un échange</h1>


<form method="POST" action="/echanges" class="w-75 mx-auto">
        {{ csrf_field() }}


        <div class="form-group">
                <label for="id_user">operateur * :</label>
                <select name='id_user' class="form-control" id="id_user" required>
                        <option> choisir</option>
                        @foreach ($users as $user )
                        <option value=" {{$user->id}}"> {{$user->nom}}</option>
                        @endforeach


                </select>
                @error('id_user')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

        </div>




        <div class="form-group">
                <label for="id_client">client * :</label>
                <select name='id_client' class="form-control" id="id_client" required>
                        <option> choisir</option>
                        @foreach ($clients as $client )
                        <option value=" {{$client->id}}"> {{$client->nom}} {{$client->prenom}}</option>
                        @endforeach


                </select>
                @error('id_client')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>


        <div class="form-group">
                <label for="id_echange_type">type d'échange *:</label>
                <select name='id_echange_type' class="form-control" id="id_echange_type" required>
                        <option> choisir</option>
                        @foreach ($EchangeTypes as $echangeType )
                        <option value=" {{$echangeType->id}}"> {{$echangeType->type}}</option>
                        @endforeach


                </select>
                @error('id_echange_type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


        </div>

       
        <div class="form-group">

                <label for="commentaire">commentaire :</label> <br>
                <textarea class="form-control" rows="3" name="commentaire" id="commentaire">  </textarea>

                @error('commentaire')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

       
        <p>(*) : champs obligatoires</p>

<div class="text-center">
        <button type="submit" class="btn btn-primary w-25 p-3">valider</button>
</div>
        



</form>
@endsection