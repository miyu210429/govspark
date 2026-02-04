<?php

namespace App\Http\Controllers;

class AreaController extends Controller
{

    //地方選択画面で、CSSタグやHTML表示に使うために地域情報を取得する関数
    public function getRegionsDetail() {
        //$regions_detailはconfig/regions.phpにある
        $regions_detail = config('regions.detail');

        return view('citizen.areas.regions',[
          'regions_detail' => $regions_detail
        ]);
    }

    public function getPrefectures($region_en) {
        $regions_detail = config('regions.detail');
        $prefectures = [
            'tohoku' => ['青森','岩手','宮城','秋田','山形','福島'],
            'kanto' => ['茨城','栃木','群馬','埼玉','千葉','東京','神奈川'],
            'chubu' => ['新潟','富山','石川','福井','山梨','長野','岐阜','静岡','愛知','三重'],
            'kinki' => ['滋賀','京都','大阪','兵庫','奈良','和歌山'],
            'chugoku' => ['鳥取','島根','岡山','広島','山口'],
            'shikoku' => ['徳島','香川','愛媛','高知'],
            'kyushu' => ['福岡','佐賀','長崎','熊本','大分','宮崎','鹿児島','沖縄']
        ];
        //config/regions.phpに記載あり
        $prefectures_en = config('regions.prefectures_en');

        return view('citizen.areas.prefectures',[
            'region_en' => $region_en,
            'regions_detail' => $regions_detail,
            'prefectures' => $prefectures,
            'prefectures_en' => $prefectures_en,
        ]);
    }


}
