@extends('layout')



@section('content')


@if(count($tickets) == 0)
<p>Pas de ticket</p>
@endif
<div class="flex flex-wrap items-stretch">
@foreach ($tickets as $ticket)
<div class="w-1/2 p-4">
    <div class="p-4 border border-solid border-black flex flex-col flex-1">
        <p><a href="/tickets/{{$ticket['id']}}">Ticket numéro {{$ticket['id']}}</a></p>
        <p>{{$ticket['prenom']}} {{$ticket['nom']}}</p>
        <p>{{$ticket['courriel']}} {{$ticket['telephone']}}</p>
        <p class="flex-1">{{$ticket['message']}}</p>

    </div>
</div>
@endforeach
</div>

@endsection