<?php

use Illuminate\Support\Facades\Route;

//地方選択画面用
Route::get('/regions', [\App\Http\Controllers\AreaController::class, 'getRegionsDetail'])
    ->name('regions');
//都道府県選択画面用（一旦、関東地方を選択している）
Route::get('/regions/{region}',  [\App\Http\Controllers\AreaController::class, 'getPrefectures'])
    ->name('prefectures');

Route::prefix('/{prefecture}')->group(function () {
    //コメント一覧ホーム画面。県をURLにする
    Route::get('/comments',  [\App\Http\Controllers\CommentController::class, 'getCommentsInfo'])
        ->name('index');
    //批判投稿画面(ダミーなのでコメントIDは2固定)
    Route::get('comments/11/critique', function (string $prefecture ) {
        return view('citizen.comments.critique', [
            'prefecture_en' => $prefecture,
        ]);
    })->name('critique');

    //立候補者詳細画面（佐藤 美咲さん分のUIのみなので固定で2を使う）
    Route::get('/politician/2', function (string $prefecture) {
        return view('citizen.politician-detail', [
            'prefecture_en' => $prefecture,
        ]);
    })->name('politician.detail');

    //検索画面
    Route::get('/search', function (string $prefecture) {
        return view('citizen.search.search',[
            'prefecture_en' => $prefecture,
        ]);
    })->name('search');

    //検索結果画面(ダミーの検索なのでクエリはなし)
    Route::get('/search/result', function (string $prefecture) {
        return view('citizen.search.result',[
            'prefecture_en' => $prefecture,
        ]);
    })->name('search.result');

    //バグ報告画面用
    Route::get('/report', function (string $prefecture) {
        return view('citizen.report',[
            'prefecture_en' => $prefecture,
        ]);
    })->name('report');

});
