@extends('layout')



@section('content')


@if(count($tickets) == 0)
<p>Pas de ticket</p>
@endif
<div class="grid grid-cols-2 gap-4">
@foreach ($tickets as $ticket)

    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title"><a href="/tickets/{{$ticket['id']}}">Ticket numéro {{$ticket['id']}}</a></h2>
            <p>{{$ticket['prenom']}} {{$ticket['nom']}}</p>
            <p><i class="fa-solid fa-at"></i> {{$ticket['courriel']}} 
                <br><i class="fa-solid fa-phone"></i> {{$ticket['telephone']}}</p>
            <p class="flex-1">{{$ticket['message']}}</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
              </div>
        </div>
    </div>
@endforeach
</div>

@endsection