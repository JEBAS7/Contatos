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

Route::get('/deleteusers/{user_id}', [\App\Http\Controllers\UserController::class, 'delete'])->name("user.backend.delete");
Route::put('/editusers/{user_id}', [\App\Http\Controllers\UserController::class, 'putedit'])->name("user.backend.put.edit");
Route::get('/editusers/{user_id}', [\App\Http\Controllers\UserController::class, 'getedit'])->name("user.backend.edit");
Route::get('/listusers', [\App\Http\Controllers\UserController::class, 'getListusers'])->name("user.backend.listusers");
Route::get('/cadastro', [\App\Http\Controllers\UserController::class, "getCadastro"])->name("user.frontend.cadastro");
Route::post('/cadastro', [\App\Http\Controllers\UserController::class, "postCadastro"])->name("user.post.cadastro");
