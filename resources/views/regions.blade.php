<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>QGovSpark — 地域選択（デスクトップ版）</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- スタイルシート -->
  <link rel="stylesheet" href="/css/regions.css">
</head>
<body>
  <div class="page-container">
    <header class="site-header" role="banner" aria-label="サイトヘッダー">
      <img src="/images/Govspark.png" class="logo">
    </header>
  
    <div>
      <h3 class="subtext">あなたの住んでいる地方を選択してください</h3>
    </div>
      
    <main class="main" role="main" aria-label="地域選択">
      <nav class="regions" role="navigation" aria-label="地域一覧">
        <a class="region region--blue" href="#" aria-label="北海道地区">
          <h2>北海道地区</h2>
        </a>

        <a class="region region--cyan" href="#" aria-label="東北地区">
          <h2>東北地区</h2>
          <p class="subtext">（青森、岩手、宮城、秋田、山形、福島）</p>
        </a>

        <a class="region region--green" href="/regions/3" aria-label="関東地区">
          <h2>関東地区</h2>
          <p class="subtext">（茨城、栃木、群馬、埼玉、千葉、東京、神奈川）</p>
        </a>

        <a class="region region--lime" href="#" aria-label="中部地区">
          <h2>中部地区</h2>
          <p class="subtext">（新潟、富山、石川、福井、山梨、長野、岐阜、静岡、愛知、三重）</p>
        </a>

        <a class="region region--yellow" href="#" aria-label="近畿地区">
          <h2>近畿地区</h2>
          <p class="subtext">（滋賀、京都、大阪、兵庫、奈良、和歌山）</p>
        </a>

        <a class="region region--orange-light" href="#" aria-label="中国地区">
          <h2>中国地区</h2>
          <p class="subtext">（鳥取、島根、岡山、広島、山口）</p>
        </a>

        <a class="region region--orange" href="#" aria-label="四国地区">
          <h2>四国地区</h2>
          <p class="subtext">（徳島、香川、愛媛、高知）</p>
        </a>

        <a class="region region--red" href="#" aria-label="九州地区">
          <h2>九州地区</h2>
          <p class="subtext">（福岡、佐賀、長崎、熊本、大分、宮崎、鹿児島、沖縄）</p>
        </a>

        <a class="region region--gray" href="#" aria-label="比例代表制">
          <h2>比例代表制</h2>
        </a>
      </nav>

      <div class="language-section" aria-hidden="false">
        <p class="language-label">Language</p>
      </div>
    </main>
  </div>
</body>
</html>