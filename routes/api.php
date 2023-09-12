<?php

use App\Http\Controllers\Api\ApiActualityCommentController;
use App\Http\Controllers\Api\ApiActualityController;
use App\Http\Controllers\Api\ApiCommentController;
use App\Http\Controllers\Api\ApiEventController;
use App\Http\Controllers\Api\ApiMatcheController;
use App\Http\Controllers\Api\ApiOtherController;
use App\Http\Controllers\Api\ApiPayementController;
use App\Http\Controllers\Api\ApiReclamationController;
use App\Http\Controllers\Api\ApiScoreController;
use App\Http\Controllers\Api\ApiTicketController;
use App\Http\Controllers\Api\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login',[ApiUserController::class,'login'])->name('api_login');
Route::get('todayevent',[ApiEventController::class,'todayEvent'])->name('todayevent');
Route::get('futurevent',[ApiEventController::class,'futurEvent'])->name('futurevent');
Route::get('passevent',[ApiEventController::class,'passEvent'])->name('passevent');
Route::get('alltiketforevent/{event_id}',[ApiTicketController::class,'allTiketForEvent'])->name('alltiketforevent');
Route::get('allcommentforevent/{event_id}',[ApiCommentController::class,'allcommentforevent'])->name('allcommentforevent');
Route::get('alltiketforuser/{user_id}',[ApiTicketController::class,'allTiketForUser'])->name('alltiketforuser');
Route::get('searchevent/{q}',[ApiEventController::class,'search'])->name('searchevent');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resources([
    "actuality"=>ApiActualityController::class,
    "actuality"=>ApiActualityCommentController::class,
    "comment"=>ApiCommentController::class,
    "event"=>ApiEventController::class,
    "matche"=>ApiMatcheController::class,
    "other"=>ApiOtherController::class,
    "payement"=>ApiPayementController::class,
    "reclamation"=>ApiReclamationController::class,
    "score"=>ApiScoreController::class,
    "ticket"=>ApiTicketController::class,
    "user"=>ApiUserController::class,
]);