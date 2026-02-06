<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CommentController extends Controller
{
    /**
     * コメントに関する情報を取得するためのメソッド
     * @param string $prefecture
     * @return Factory|View|\Illuminate\View\View
     */
    public function getCommentsInfo(string $prefecture) {
        $region_kanji = config('regions.region_kanji');
        $prefectures_kanji = config('regions.prefectures_en');
        //都道府県＝＞英語の$prefectures_kanji配列をarray_flipによってkeyと値を入れ替えて再代入
        $prefecture_kanji = array_flip($prefectures_kanji);
        $comments_detail =  config('comments.comments_detail');
        $topics = config('comments.topics');

        return view('citizen.comments.comments',[
            'region_kanji' => $region_kanji($prefecture),
            'prefecture_kanji' => $prefecture_kanji[$prefecture],
            'comments_detail' => $comments_detail,
            'topics' => $topics,
            'prefecture_en' => $prefecture,
        ]);
    }
}
