<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarsasjatekController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/tarsasjateks', [TarsasjatekController::class, 'index']);
Route::get('/api/tarsasjatek/{id}', [TarsasjatekController::class, 'show']);
Route::post('/api/tarsasjatek', [TarsasjatekController::class, 'store']);
Route::put('/api/tarsasjatek/{id}', [TarsasjatekController::class, 'update']);
Route::delete('/api/tarsasjatek/{id}', [TarsasjatekController::class, 'destroy']);

Route::get('/tarsasjatek/new', [TarsasjatekController::class, 'create']);
Route::get('/tarsasjatek/edit/{id}', [TarsasjatekController::class, 'edit']);
Route::get('/tarsasjatek/list', [TarsasjatekController::class, 'list']);

