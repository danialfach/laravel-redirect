<?php

use App\Http\Controllers\RedirectController;
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

Route::get("/redirect/from", [App\Http\Controllers\RedirectController::class, "redirectFrom"]);

Route::get("/redirect/to", [App\Http\Controllers\RedirectController::class, "redirectTo"]);