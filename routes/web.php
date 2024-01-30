<?php

use App\Http\Controllers\CreationalPatternsController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/skills', [SkillsController::class, 'index']);
//Route::get('/creational/{action}', function ($action) {
//    return CreationalPatternsController::class . '@' . $action;
//});
Route::controller(CreationalPatternsController::class)->group(
    function () {
        Route::get('/creational/abstract-factory', 'abstractFactory');
    }
);
