<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Prodect\Show;
use App\Http\Livewire\Prodect\Add;
use App\Http\Livewire\Prodect\Update;
use App\Http\Livewire\MasterData\Categorydata;
use App\Http\Livewire\MasterData\Gropproduct;
use App\Http\Livewire\MasterData\ProductDetail;

use App\Http\Livewire\Home;




Route::get('/', function () {
    return view('auth/login');
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
    Route::get('/category', Categorydata::class)->name('category');
    Route::get('/Home', Home::class)->name('Home');
    Route::get('/gropproduct', Gropproduct::class)->name('Gropproduct');
    Route::get('/productdetail', ProductDetail::class)->name('productdetail');
});



