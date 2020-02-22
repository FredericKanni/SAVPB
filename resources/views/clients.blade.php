@extends('layout')


@section('contenu')
   liste des clients


   @foreach ($clients as $client )
   <p>{{$client-> nom}}</p>
   @endforeach
@endsection


