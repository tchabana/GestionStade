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
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeController;

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
Route::get('/paiement/{evenement}', [HomeController::class, 'payticket'])->name('payticket');

//fayssol's routes
Route::post('ticket-generate',[PdfController::class,'generate'])->name('pdf');
Route::post('employe/desactive/{employe}',[UserController::class,'desactiver'])->name('desactive');
Route::post('employe/restore/{employe}',[UserController::class,'desactiver'])->name('restore');
Route::post('employe/definitive/{employe}',[UserController::class,'definitive'])->name('definitive');
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
    "user"=>UserController::class,
]);

//hafiz
Route::get('todayevent',[EventController::class,'todayEvent'])->name('todayevent');
Route::get('alltiketforevent/{event_id}',[TicketController::class,'allTiketForEvent'])->name('alltiketforevent');
Route::post('paiement',[PayementController::class,'paiement'])->name('paiement');
Route::get('paiement_success',[PayementController::class,'paiement_success'])->name('paiement_success');
Route::get('paiement_cancel',[PayementController::class,'paiement_cancel'])->name('paiement_cancel');

