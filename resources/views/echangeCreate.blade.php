@extends('layout')



@section('contenu')
  

@foreach ($users as $user )
<option value=" {{$user->id}}"> {{$user->nom}}</option>
@endforeach

<form method="POST" action="/echanges">
    {{ csrf_field() }}

   
        <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select name='id_user' class="form-control" id="exampleFormControlSelect1">
                        <option selected>Choose...</option>
                        @foreach ($users as $user )
                        <option value=" {{$user->id}}"> {{$user->nom}}</option>
                        @endforeach

                
                </select>
              </div>




              <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select   name='id_client' class="form-control" id="exampleFormControlSelect1">
                            <option selected>Choose...</option>
                            @foreach ($clients as $client )
                            <option value=" {{$client->id}}"> {{$client->nom}}</option>
                            @endforeach
    
                    
                    </select>
                  </div>


                  <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select  name='id_echange_type' class="form-control" id="exampleFormControlSelect1">
                                <option selected>Choose...</option>
                                @foreach ($EchangeTypes as $echangeType )
                                <option value=" {{$echangeType->id}}"> {{$echangeType->type}}</option>
                                @endforeach
        
                        
                        </select>
                      </div>
   <input type="text" name="commentaire" id="commentaire">
  
                      <button type="submit" class="btn btn-primary">Sign in</button>
                   
  </form>
@endsection







