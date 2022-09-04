<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [MovieController::class, "index"])->name("movie");
Route::get("/create", [MovieController::class, "create"])->name("create");
Route::post("/store", [MovieController::class, "store"])->name("store");
Route::get("/edit/{id}", [MovieController::class, "edit"])->name("edit");
Route::post("/update/{id}", [MovieController::class, "update"])->name("update");
Route::delete("/destroy/{id}", [MovieController::class, "destroy"])->name("destroy");

