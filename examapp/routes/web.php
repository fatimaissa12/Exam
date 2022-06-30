<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Prodect\Show;
use App\Http\Livewire\Prodect\Add;
use App\Http\Livewire\Prodect\Update;




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
    Route::get('/showprodect', Show::class)->name('showprodect');
    Route::get('/addprodect', Add::class)->name('addprodect');
    Route::get('/editprodect/{prodect_id}', Update::class)->name('editprodect');

    Route::get('/Home', Home::class)->name('Home');
    
});



