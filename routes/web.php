<?php

use App\Http\Controllers\TicketController;
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
Route::get('/', [TicketController::class, 'index']);

/*
Un seul ticket  
*/
Route::get('/tickets/{ticket}', [TicketController::class,'show']);

/*
Créer un ticket
*/

