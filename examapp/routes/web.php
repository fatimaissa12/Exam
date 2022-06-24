<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Prodect\Show;
use App\Http\Livewire\Home;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([ 'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'


])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/prodect', Show::class)->name('prodect');
    Route::get('/Home', Home::class)->name('Home');
    
});



