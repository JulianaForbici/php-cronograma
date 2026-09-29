<?php

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ScheduleItemController;
use Illuminate\Support\Facades\Route;

Route::apiResource('schedules', ScheduleController::class);
Route::post('schedule-items', [ScheduleItemController::class, 'store']);
Route::put('schedule-items/{scheduleItem}', [ScheduleItemController::class, 'update']);
Route::delete('schedule-items/{scheduleItem}', [ScheduleItemController::class, 'destroy']);
