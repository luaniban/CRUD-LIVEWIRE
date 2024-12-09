<?php


use Illuminate\Support\Facades\Route;
use App\Livewire\Curriculos;
use App\Livewire\Disciplinas;
use App\Livewire\Users\Index;
use App\Livewire\Users\Edit;
//use App\Livewire\Counter;



//Route::get('/ola', Counter::class)->name('ola');
Route::get('/user', Index::class)->name('user');
Route::get('/disciplina', Disciplinas::class)->name('disciplina');
Route::get('/curriculo', Curriculos::class)->name('curriculo');
Route::get('/user/{id}', Edit::class)->name('edit');


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
