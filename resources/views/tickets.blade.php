@extends('layout')



@section('content')
<h1 class="text-3xl font-bold my-8">{{$heading}}</h1>

@if(count($tickets) == 0)
<p>Pas de ticket</p>
@endif
<div class="flex flex-wrap">
@foreach ($tickets as $ticket)
<div class="w-1/2 p-4">
    <div class="p-4 border border-solid border-black">
<p><a href="/ticket/{{$ticket['id']}}">Ticket numéro {{$ticket['id']}}</a></p>
<p>{{$ticket['prenom']}} {{$ticket['nom']}}</p>
<p>{{$ticket['courriel']}} {{$ticket['telephone']}}</p>
<p>{{$ticket['message']}}</p>
    </div>
</div>
@endforeach
</div>

@endsection