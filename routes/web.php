<?php

use App\Http\Controllers\MatcheController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\ActualityCommentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/actions_users/{id}', [HomeController::class, 'show'])->name('show');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/payement', [HomeController::class, 'payticket'])->name('payticket');

//fayssol's routes
Route::post('ticket-generate',[PdfController::class,'generate'])->name('pdf');
//fin
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
    "actuality"=>ActualityController::class,
    "actualitycomment"=>ActualityCommentController::class,
    "comment"=>CommentController::class,
    "event"=>EventController::class,
    "matche"=>MatcheController::class,
    "other"=>OtherController::class,
    "payement"=>PayementController::class,
    "reclamation"=>ReclamationController::class,
    "score"=>ScoreController::class,
    "ticket"=>TicketController::class,
]);

//hafiz
Route::get('todayevent',[EventController::class,'todayEvent'])->name('todayevent');
Route::get('alltiketforevent/{event_id}',[TicketController::class,'allTiketForEvent'])->name('alltiketforevent');
