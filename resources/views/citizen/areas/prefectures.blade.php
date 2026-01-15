<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QGovSpark — 都道府県選択</title>
  <link rel="stylesheet" href="/css/citizens.css?v=999">
</head>

<body class="page--prefectures">
  <div class="page-container">
  @include('components.header')

    <h3 class="subtext">関東地方の都道府県を選択してください</h3>
    

    <main class="main">
    <div class="region-title">
            関東地区
        </div>
      <nav class="regions">
        <a class="region region--gray" href="{{ route('index') }}">
          <h2>東京都</h2>
        </a>

        <a class="region region--gray" href="#">
          <h2>神奈川県</h2>
        </a>

        <a class="region region--gray" href="#">
          <h2>千葉県</h2>
        </a>

        <a class="region region--gray" href="#">
          <h2>埼玉県</h2>
        </a>

        <a class="region region--gray" href="#">
          <h2>茨城県</h2>
        </a>

        <a class="region region--gray" href="#">
          <h2>栃木県</h2>
        </a>

        <a class="region region--gray" href="#">
          <h2>群馬県</h2>
        </a>

      </nav>

      <p style="margin-top:16px;">
        <a href="/regions"  class="back-btn">← 地方選択に戻る</a>
      </p>
    </main>
  </div>
</body>
</html>
