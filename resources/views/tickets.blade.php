@extends('layout')



@section('content')
<h1 class="text-3xl font-bold my-8">{{$heading}}</h1>

@if(count($tickets) == 0)
<p>Pas de ticket</p>
@endif
<div class="flex flex-wrap items-stretch">
@foreach ($tickets as $ticket)
<div class="w-1/2 p-4">
    <div class="p-4 border border-solid border-black flex flex-col">
        <p><a href="/ticket/{{$ticket['id']}}">Ticket numéro {{$ticket['id']}}</a></p>
        <p>{{$ticket['prenom']}} {{$ticket['nom']}}</p>
        <p>{{$ticket['courriel']}} {{$ticket['telephone']}}</p>
        <p class="flex-1">{{$ticket['message']}}</p>
        <i class="fa-solid fa-user"></i>
        <!-- uses solid style -->
        <i class="fa-brands fa-github-square"></i>
        <!-- uses brand style -->
    </div>
</div>
@endforeach
</div>

@endsection