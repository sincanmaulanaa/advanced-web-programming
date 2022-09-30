<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;

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

Route::get("/login", function () {
    return view("/login");
})->name("masuk");

Route::get("/register", function () {
    return view("/register");
})->name("daftar");

Route::get("/guest", function () {
    return view("/guest");
})->name("tamu");

Route::get("/about-me", function () {
    return view("/about-me");
})->name("tentang-saya");

Route::get("/home/{nama}", [TestingController::class, "home"])->name("beranda");
