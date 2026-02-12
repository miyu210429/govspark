<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - 都道府県選択</title>
    <link rel="stylesheet" href="{{ asset('css/people/prefecture_select.css') }}">
</head>
<body>
    <div class="container">
        <!-- ロゴエリア -->
        <div class="logo-area">
            <img src="{{ asset('images/GovSpark_re.png') }}" alt="GovSpark デジタル庁">
        </div>


        <!-- 地域ヘッダー -->
        <div class="region-header {{$region_en}}"><!--region_select.css のkanto とかtohokuとかつけたら対応した地区の色になる、茨城とかは別途表示かえてやって-->
            <span class="region-title">{{ $regions_detail[$region_en][0] }}</span>
            <span class="region-prefectures">（{{ $regions_detail[$region_en][1] }}）</span>
        </div>

        <!-- 都道府県選択エリア -->
        <div class="prefecture-select">

            @foreach($prefectures[$region_en] as $prefecture)
                <button class="prefecture-button" onclick="location.href='{{ route('index', ['prefecture' => $prefectures_en[$prefecture]]) }}'">{{$prefecture}}</button>
            @endforeach

            <button type="button" class="back-button" onclick="history.back()">戻る</button>
        </div>
    </div>
</body>
</html>
