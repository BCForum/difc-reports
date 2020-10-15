<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonTypeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CellController;
use App\Http\Controllers\CellDetailController;

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

### PERSON TYPE
Route::get('/persontype', [PersonTypeController::class, 'index']);
Route::get('/persontype/{code}', [PersonTypeController::class, 'show'] );
Route::post('/persontype',[PersonTypeController::class, 'store']);


### PERSON
Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/{id}', [PersonController::class, 'show']);
Route::get('/person/{id}/cells', [PersonController::class, 'getcells']);
Route::post('/person',[PersonController::class, 'store']);


####Cell
Route::get('/cell', [CellController::class,'index']);
Route::get('/cell/{id}', [CellController::class, 'show']);
Route::get('/cell/{id}/shepherd', [CellController::class, 'showshepherd'] );
Route::get('/cell/{id}/members', [CellController::class, 'showmembers'] );
Route::post('/cell', [CellController::class, 'store']);

#### Cell Detail
Route::get('/celldetail/{cell_id}', [CellDetailController::class, 'celllist']);
Route::post('/celldetail', [CellDetailController::class, 'store']);
