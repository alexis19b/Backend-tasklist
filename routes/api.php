<?php
use App\Http\Controllers\API\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tareas',[TareaController::class, 'index']);
Route::post('tareas',[TareaController::class, 'store']);
Route::get('tareas/{tarea}',[TareaController::class, 'show']);
Route::put('tareas/{tarea}',[TareaController::class, 'update']);
Route::post('confirmed/{tarea}',[TareaController::class, 'updateConfirmed']);
Route::get('/search/{name}',[TareaController::class, 'searchName']);
Route::get('/completed/{confirmed}',[TareaController::class, 'searchStatus']);
Route::delete('tareas/{tarea}',[TareaController::class, 'destroy']);
