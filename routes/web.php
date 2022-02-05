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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pages', [\App\Http\Controllers\PageController::class, "index"]);
Route::get('/table', [\App\Http\Controllers\PageController::class, "table"]);
Route::post('/pages', [\App\Http\Controllers\PageController::class, "addMessage"]);


require __DIR__.'/auth.php';
