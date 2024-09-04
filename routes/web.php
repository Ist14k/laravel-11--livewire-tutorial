<?php

use App\Livewire\Counter;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/counter');
});

Route::get('/counter', Counter::class);
Route::get('/todo', Todo::class);
