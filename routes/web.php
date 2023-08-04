<?php

use App\Models\Actuality;
use App\Models\Comment;
use App\Models\Event;
use App\Models\Matche;
use App\Models\Other;
use App\Models\Payement;
use App\Models\Reclamation;
use App\Models\Score;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resources([
    "actuality"=>Actuality::class,
    "comment"=>Comment::class,
    "event"=>Event::class,
    "matche"=>Matche::class,
    "other"=>Other::class,
    "payement"=>Payement::class,
    "reclamation"=>Reclamation::class,
    "score"=>Score::class,
    "ticket"=>Ticket::class,
]);
