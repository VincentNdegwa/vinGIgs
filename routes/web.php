<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listings;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



// listings
Route::get('/', [ListingController::class, 'getAll'])->name('listingsAll')->middleware('auth');
Route::get('/list/{id}', [ListingController::class, 'show'])->middleware('auth');
Route::post('/list/create', [ListingController::class, 'create'])->middleware('auth');
Route::post('/list/edit', [ListingController::class, 'listingEdit'])->name('listingEdit')->middleware('auth');
Route::get('/list/delete/{id}', [ListingController::class, 'listingDelete'])->name('listingDelete')->middleware('auth');
Route::get('/list/get/{id}', [ListingController::class, 'listingGet'])->name('listingGet')->middleware('auth');





Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get("/register", function () {
    return view("auth.register");
});
Route::get("/create", function () {
    return view("pages.create", [
        'userCreatedJobs' => Listings::where('email', auth()->user()->email)->orderBy('updated_at', 'DESC')->get(),
        'dataCreated' => null,
        'updatingData' => null,
    ]);
});

// validation credentials
Route::prefix('/users')->group(function () {
    Route::post('/register', [UserController::class, 'registerUser']);
    Route::post('/login', [UserController::class, 'loginUser']);
});
