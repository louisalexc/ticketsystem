@extends('layout')

@section('content')

<p>{{$ticket['prenom']}} {{$ticket['nom']}}</p>
<p>{{$ticket['courriel']}} {{$ticket['telephone']}}</p>
<p>{{$ticket['description']}}</p>

@endsection