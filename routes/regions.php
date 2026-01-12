<?php

use Illuminate\Support\Facades\Route;

Route::get('/regions', function () {
    return view('regions');
})->name('regions');
?>