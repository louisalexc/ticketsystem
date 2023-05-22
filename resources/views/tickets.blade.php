@extends('layout')



@section('content')
<h1 class="text-3xl font-bold">{{$heading}}</h1>

@if(count($tickets) == 0)
<p>Pas de ticket</p>
@endif

@foreach ($tickets as $ticket)
<div>
<p><a href="/ticket/{{$ticket['id']}}">Ticket numéro {{$ticket['id']}}</a></p>
<p>{{$ticket['prenom']}} {{$ticket['nom']}}</p>
<p>{{$ticket['courriel']}} {{$ticket['telephone']}}</p>
<p>{{$ticket['description']}}</p>
</div>
@endforeach

@endsection