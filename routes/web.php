<?php

use App\Http\Controllers\ListingController;
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




Route::get('/',[ListingController::class, 'getAll']);

Route::get('/list/{id}',[ListingController::class, 'show']);

Route::get('/login',function(){
    return view('auth.login');
});

