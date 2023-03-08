<?php

use App\Http\Controllers\MarriageCounter\MarriageCounterController;
use Illuminate\Support\Facades\Route;

Route::get('/marriage_counter',[MarriageCounterController::class,'home']);

Route::get('marriage/start_game',[MarriageCounterController::class,'start_game']);
Route::post('/marriage/add_player',[MarriageCounterController::class,'add_player']);
Route::get('marriage/check_no_of_player',[MarriageCounterController::class,'check_no_of_player']);
Route::post('/marriage/update_player',[MarriageCounterController::class,'update_player']);
Route::post('/marriage/delete_player',[MarriageCounterController::class,'delete_player']);
