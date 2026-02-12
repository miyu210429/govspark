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
            <img src="{{ asset('images/GovSpark_re.png') }}" alt="GovSpark デジタル庁">
        </div>

        <!-- 地域選択エリア -->
        @foreach($regions_detail as $region_en => $detail)
            <div class="region-select">
                @if(!isset($detail[1]))
                    <!--　北海道地区 -->
                    <button class="region-button {{ $region_en }}" onclick="location.href='{{ route('index',['prefecture' => 'hokkaido']) }}'">
                        <span class="region-title">{{$detail[0]}}</span>
                    </button>
                @else
                    <!--　北海道以外 -->
                    <button class="region-button {{ $region_en  }}" onclick="location.href='{{ route('prefectures', ['region' => $region_en]) }}'">
                        <span class="region-title">{{$detail[0]}}</span>
                        <span class="region-prefectures">（{{ $detail[1] }}）</span>
                    </button>
                @endif
        @endforeach

            <!-- 比例代表制 -->
            <button class="region-button proportional" onclick="location.href='{{ route('index', ['prefecture' => 'hirei'] )}}'">
                <span class="region-title">比例代表制</span>
            </button>
        </div>
    </div>
</body>
</html>
