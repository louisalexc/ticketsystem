<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //Lister tous les tickets
    public function index(){
        return view('tickets.index', [
            'tickets' => Ticket::all()
        ]);
    }
    
    //Montrer un ticket
    public function show(Ticket $ticket){
        return view('tickets.show', [
            'ticket' => $ticket
        ]);
    }
}

