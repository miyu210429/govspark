<?php

use Illuminate\Support\Facades\Route;

//地方選択画面用
Route::get('/regions', function () {return view('citizen.areas.regions');})->name('regions');
//都道府県選択画面用（一旦、関東地方を選択している）
Route::get('/regions/kanto', function () {return view('citizen.areas.prefectures');})->name('prefectures');
//コメント一覧ホーム画面。県をURLにする（今は関東地方/東京都）
Route::get('/comments/{prefecture}', function () {return view('citizen.comments.comments');})->name('comments');

Route::get('/report', function () {return view('citizen.report');})->name('report');

