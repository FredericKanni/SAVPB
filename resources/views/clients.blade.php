@extends('layout')


@section('contenu')
   liste des clients
  {{ csrf_token() }}

   @foreach ($clients as $client )
   <p>{{$client-> nom}}</p>
   @endforeach
@endsection


