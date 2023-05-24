<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ticket;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Page d'accueuil
*/
Route::get('/', function () {
    return view('welcome');
});

/*
Tous les tickets 
*/
Route::get('/tickets', function () {
    return view('tickets', [
        'heading' => 'Tous les tickets',
        'tickets' => Ticket::all()
    ]);
});
/*
Un seul ticket  
*/
Route::get('/ticket/{id}', function ($id) {
    return view('ticket', [
        'ticket' => Ticket::find($id)
    ]);
});