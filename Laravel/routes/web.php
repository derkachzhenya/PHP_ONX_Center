<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('client', [ClientController::class, 'index'])->name('client.index');

