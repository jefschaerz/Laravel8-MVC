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

//See : https://laravel.com/docs/8.x/routing#basic-routing

use App\Http\Controllers\TaskController;

// Attention !
// L'ordre est important car Laravel utilise la première qui match

// // Work correctly
// Route::get('tasks', function() {
//     return 'Task is ok' ;
// });

// Pour simplifier par ressource et Laravel liste automatiqment les routes avec les verbes:
// Visible avec commande ./artisan route:list
Route::resource('tasks', TaskController::class);

// Redirect base on tasks list
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// On peut mettre des contraintes sur les paramètres avec des pattern regex

