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
            <img src="{{ asset('images/Govspark.png') }}" alt="GovSpark デジタル庁">
        </div>

        <!-- 地域ヘッダー（関東地区） -->
        <div class="region-header kanto"><!--region_select.css のkanto とかtohokuとかつけたら対応した地区の色になる、茨城とかは別途表示かえてやって-->
            <span class="region-title">関東地区</span>
            <span class="region-prefectures">（茨城、栃木、群馬、埼玉、千葉、東京、神奈川）</span>
        </div>

        <!-- 都道府県選択エリア -->
        <div class="prefecture-select">
            <!-- 茨城県 -->
            <button class="prefecture-button" onclick="location.href='3.html'">茨城県</button>

            <!-- 栃木県 -->
            <button class="prefecture-button" onclick="location.href='3.html'">栃木県</button>

            <!-- 群馬県 -->
            <button class="prefecture-button" onclick="location.href='3.html'">群馬県</button>

            <!-- 埼玉県 -->
            <button class="prefecture-button" onclick="location.href='3.html'">埼玉県</button>

            <!-- 千葉県 -->
            <button class="prefecture-button" onclick="location.href='3.html'">千葉県</button>

            <!-- 東京都 -->
            <button class="prefecture-button" onclick="location.href='3.html'">東京都</button>

            <!-- 神奈川県 -->
            <button class="prefecture-button" onclick="location.href='3.html'">神奈川県</button>

            <!-- 戻る -->
            <a href="1.html" class="back-button">戻る</a>
        </div>
    </div>
</body>
</html>
