@extends('layout')

@section('content')
<div class="flex gap-6">
    <div class="w-2/3">
        <p>{{$ticket['prenom']}} {{$ticket['nom']}}</p>
        <p>{{$ticket['courriel']}} {{$ticket['telephone']}}</p>
        <p>{{$ticket['message']}}</p>
    </div>
    <div class="w-1/3">
        <ul class="steps steps-vertical">
            <li class="step step-primary">
                <div class="card w-96 bg-base-100 shadow-xl mb-4">
                    <div class="card-body">
                    <h2 class="card-title">Ticket créé</h2>
                    <p>Date {{$ticket['created_at']}}</p>
                    </div>
                </div>
            </li>
            <li class="step step-primary">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-body">
                    <h2 class="card-title">Ticket modifié</h2>
                    <p>Date {{$ticket['updated_at']}}</p>
                    </div>
                </div>
            </li>
            <li class="step">Purchase</li>
        </ul>
    </div>

    
</div>
@endsection