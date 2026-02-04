<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - 地域選択</title>
    <link rel="stylesheet" href="{{ asset('css/people/region_select.css') }}">
</head>
<body>
    <div class="container">
        <!-- ロゴエリア -->
        <div class="logo-area">
            <img src="{{ asset('images/Govspark.png') }}" alt="GovSpark デジタル庁">
        </div>

        <!-- 地域選択エリア -->
        <div class="region-select">
            <!-- 北海道地区 -->
            <button class="region-button hokkaido" onclick="location.href='2.html'">
                <span class="region-title">北海道地区</span>
            </button>

            <!-- 東北地区 -->
            <button class="region-button tohoku" onclick="location.href='2.html'">
                <span class="region-title">東北地区</span>
                <span class="region-prefectures">（青森、岩手、宮城、秋田、山形、福島）</span>
            </button>

            <!-- 関東地区 -->
            <button class="region-button kanto" onclick="location.href='2.html'">
                <span class="region-title">関東地区</span>
                <span class="region-prefectures">（茨城、栃木、群馬、埼玉、千葉、東京、神奈川）</span>
            </button>

            <!-- 中部地区 -->
            <button class="region-button chubu" onclick="location.href='2.html'">
                <span class="region-title">中部地区</span>
                <span class="region-prefectures">（新潟、富山、石川、福井、山梨、長野、岐阜、静岡、愛知、三重）</span>
            </button>

            <!-- 近畿地区 -->
            <button class="region-button kinki" onclick="location.href='2.html'">
                <span class="region-title">近畿地区</span>
                <span class="region-prefectures">（滋賀、京都、大阪、兵庫、奈良、和歌山）</span>
            </button>

            <!-- 中国地区 -->
            <button class="region-button chugoku" onclick="location.href='2.html'">
                <span class="region-title">中国地区</span>
                <span class="region-prefectures">（鳥取、島根、岡山、広島、山口）</span>
            </button>

            <!-- 四国地区 -->
            <button class="region-button shikoku" onclick="location.href='2.html'">
                <span class="region-title">四国地区</span>
                <span class="region-prefectures">（徳島、香川、愛媛、高知）</span>
            </button>

            <!-- 九州地区 -->
            <button class="region-button kyushu" onclick="location.href='2.html'">
                <span class="region-title">九州地区</span>
                <span class="region-prefectures">（福岡、佐賀、長崎、熊本、大分、宮崎、鹿児島、沖縄）</span>
            </button>

            <!-- 比例代表制 -->
            <!--これどこに遷移させるんだろう？-->
            <button class="region-button proportional" onclick="location.href='2.html'">
                <span class="region-title">比例代表制</span>
            </button>
        </div>

        <!-- Language -->
        <div class="language-section">
            <p>Language</p>
        </div>
    </div>
</body>
</html>
