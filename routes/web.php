<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\NeyserController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/eduardo', function () {
    return view('eduardo');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

//Route::get('/neyser', [NeyserController::class, 'index'])->name('neyser');

Route::get('/neyser', function () {
    return view('neyser');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');


    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/fatima', function () {
    return view('fatima');
});

require __DIR__.'/auth.php';
