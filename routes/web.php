<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

//nav-bar
Route::get('/', [NavController::class, 'welcome']);
Route::get('/Personnages', [NavController::class, 'list']);
Route::get('/AjoutPerso', [NavController::class, 'add']);

//formulaire add
Route::post('/AjoutPerso', [ActionController::class, 'store']);

//formulaire list
Route::post('/supprimer/{id}', [ActionController::class, 'deleteCharacter']);
Route::get('/modifier/{id}', [NavController::class, 'updateCharacter']);

//formulaire update
Route::post('/modifier/{id}', [ActionController::class, 'updateCharacter']);