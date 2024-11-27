<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Escolas;

Route::get('/', Escolas::class);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
