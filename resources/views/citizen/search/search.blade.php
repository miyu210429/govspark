<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - 検索</title>
    <link rel="stylesheet" href="{{ asset('css/people/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/people/tag-search.css') }}">
</head>
<body>
    @include('partials.header')
    @include('partials.menu')

    <!-- メインコンテンツ -->
    <main class="tag-search-content">
        <h1 class="page-title">検索</h1>
        
        <!-- 検索ボックス -->
        <div class="keyword-search-box" data-result-url="{{ route('search.result', ['prefecture' => $prefecture_en ?? null]) }}">
            <button type="button" class="search-icon-button" aria-label="検索">🔍</button>
            <div class="keyword-input-wrapper" id="keywordInputWrapper">
                <div class="selected-tags" id="selectedTags"></div>
                <input type="text" class="keyword-input" id="keywordInput" placeholder="キーワードを入力">
            </div>
        </div>

        <!-- タグセクション -->
        <div class="tag-section">
            <h2 class="tag-section-title">タグで検索（検索済み件）</h2>
            
            <!-- タグコンテナ -->
            <div class="tag-container" id="tagContainer"></div>

            <!-- もっと見るボタン -->
            <button class="show-more-button" id="showMoreButton">
                <span>もっと見る</span>
                <span class="arrow-down">▼</span>
            </button>
        </div>
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/tag-search.js') }}"></script>
    <script>
        // バックエンドから受け取るタグ配列（50個）
        const backendTags = [
            "#教育平等", "#若者支援", "#子育て", "#保育", "#環境政策",
            "#再生エネルギー", "#地方創生", "#若者雇用", "#医療改革", "#地域医療",
            "#働き方改革", "#ワークライフバランス", "#DX推進", "#行政改革", "#ジェンダー平等",
            "#女性活躍", "#防災", "#安全安心", "#観光", "#地域振興",
            "#多様性", "#教育機会", "#若者政策", "#奨学金", "#高齢者福祉",
            "#年金制度", "#介護", "#バリアフリー", "#公共交通", "#インフラ整備",
            "#文化振興", "#スポーツ振興", "#健康増進", "#食の安全", "#農業政策",
            "#漁業支援", "#中小企業支援", "#起業支援", "#雇用創出", "#最低賃金",
            "#税制改革", "#財政健全化", "#外交", "#安全保障", "#憲法改正",
            "#教育無償化", "#給食無償化", "#少子化対策", "#結婚支援", "#住宅政策"
        ];
        
        // タグをセット配列のまま渡せばオッケー（タグ数: 50）
        setTagsFromBackend(backendTags);
    </script>
</body>
</html>
