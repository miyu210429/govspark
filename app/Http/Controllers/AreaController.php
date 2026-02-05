<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AreaController extends Controller
{


    /**
     * 地方選択画面で、CSSタグやHTML表示に使うために地域情報を取得する関数
     * @return Factory|View|\Illuminate\View\View
     */
    public function getRegionsDetail() {
        //$regions_detailはconfig/regions.phpにある
        $regions_detail = config('regions.detail');

        return view('citizen.areas.regions',[
          'regions_detail' => $regions_detail
        ]);
    }

    /**
     * 都道府県選択画面で表示するための都道府県を取得する関数です。
     *  $region_enは地方選択画面で選択した地方を英語で取得する変数です。
     *
     * @param string $region_en
     * @return Factory|View|\Illuminate\View\View
     */
    public function getPrefectures(string $region_en) {
        $regions_detail = config('regions.detail');
        $prefectures = [
            'tohoku' => ['青森県','岩手県','宮城県','秋田県','山形県','福島県'],
            'kanto' => ['茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県'],
            'chubu' => ['新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県'],
            'kinki' => ['滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県'],
            'chugoku' => ['鳥取県','島根県','岡山県','広島県','山口県'],
            'shikoku' => ['徳島県','香川県','愛媛県','高知県'],
            'kyushu' => ['福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県']
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
