@extends('layout')


@section('contenu')
<h1 class="text-center m-5 "> liste des clients</h1>
  
  {{ csrf_token() }}


  <div class="container">
<div class="row">
  
   @foreach ($clients as $client )
 
   <div class="col-md-3">
      <a href="/clients/{{$client-> id}} " >
         <div class="card m-3" style="width: 15rem; height:10vh">
            <h5 class="card-title text-center my-auto client">   {{$client-> prenom}}    {{$client-> nom}}</h5>
         </div>
      </a>
   </div>

   @endforeach


</div>

  </div>


  


@endsection


