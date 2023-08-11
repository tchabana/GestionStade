<?php

use App\Models\Actuality;
use App\Models\ActualityComment;
use App\Models\Comment;
use App\Models\Event;
use App\Models\Matche;
use App\Models\Other;
use App\Models\Payement;
use App\Models\Reclamation;
use App\Models\Score;
use App\Models\Ticket;

use App\Http\Controllers\ActualityController;
use App\Http\Controllers\ActualityCommentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MatcheController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\TicketController;

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
    // "actuality"=>Actuality::class,
    // "actuality"=>ActualityComment::class,
    // "comment"=>Comment::class,
    "event"=>EventController::class,
    // "matche"=>Matche::class,
    // "other"=>Other::class,
    // "payement"=>Payement::class,
    // "reclamation"=>Reclamation::class,
    // "score"=>Score::class,
    // "ticket"=>Ticket::class,
]);
