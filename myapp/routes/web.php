<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Curriculos;
use App\Livewire\Disciplinas;

Route::get('/disciplina', Disciplinas::class);
Route::get('/curriculo', Curriculos::class)->name('curriculo');



Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
