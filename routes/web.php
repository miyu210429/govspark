<?php

use Illuminate\Support\Facades\Route;

//地方選択画面用
Route::get('/regions', function () {return view('regions');})->name('regions');

//都道府県選択画面用（一旦、関東地方を選択している）
Route::get('/regions/3', function () {return view('prefectures');})->name('prefectures');
