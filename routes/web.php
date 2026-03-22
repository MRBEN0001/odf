<?php

use App\Http\Controllers\ProfileController;
use App\Models\Beneficiary;
use Illuminate\Support\Facades\Route;
use App\Models\Team;
// Route::get('/', function () {

//     return view('welcome');
// });

Route::get('/', function () {

    $teams = Team::latest()->take(4)->get(); // 👈 get only 4

    return view('welcome', compact('teams'));
});

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/volunteers', function () {
    return view('volunteers');
})->name('volunteers');

Route::get('/beneficiaries', function () {
    return view('beneficiaries', [
        'beneficiaries' => Beneficiary::latest()->get(),
    ]);
})->name('beneficiaries');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::view('/team', 'team');
use App\Http\Controllers\TeamController;

Route::get('/team', [TeamController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
