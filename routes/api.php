<?php

use App\Http\Controllers\Task\TaskController;
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

Route::prefix('/')->group(function() {
    Route::get('/tasks/status/{status}', [TaskController::class, "getByStatus"]);
    Route::put('/tasks/{status}/finished', [TaskController::class, "finishedTask"]);
    Route::apiResource("/tasks", TaskController::class);
});
