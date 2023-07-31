<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listings;
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



// listings
Route::get('/',[ListingController::class, 'getAll'])->name('listingsAll')->middleware('auth');
Route::get('/list/{id}',[ListingController::class, 'show'])->middleware('auth');
// Route::get('/list/{id}', [ListingController::class, 'show'])->middleware('auth');





Route::get('/login',function(){
    return view('auth.login');
})->name('login');
Route::get("/register", function(){
    return view("auth.register");
});
Route::get("/create", function () {
    return view("pages.create");
});

// validation credentials
Route::prefix('/users')->group(function(){
    Route::post('/register', [UserController::class, 'registerUser']);
    Route::post('/login', [UserController::class, 'loginUser']);

});
