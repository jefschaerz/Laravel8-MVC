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

// Pour simplifier par resource et Laravel liste automatiqment les routes avec les verbes:
Route::resource('tasks', TaskController::class);

Route::get('/', function () {
    return redirect()->route('tasks.index');
});
// L'ordre est important car Laravel utilise la première qui match
