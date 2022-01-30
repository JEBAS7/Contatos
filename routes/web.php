<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/deletecontato/{contato_id}', [\App\Http\Controllers\ContatoController::class, 'delete'])->name("contato.backend.delete");
Route::put('/editcontato/{contato_id}', [\App\Http\Controllers\ContatoController::class, 'putedit'])->name("contato.backend.put.edit");
Route::get('/editcontato/{contato_id}', [\App\Http\Controllers\ContatoController::class, 'getedit'])->name("contato.backend.edit");
Route::get('/listcontatos', [\App\Http\Controllers\ContatoController::class, 'getlistcontatos'])->name("contato.backend.listcontatos");
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, "getContato"])->name("contato.frontend.contato");
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, "postContato"])->name("contato.post.contato");
