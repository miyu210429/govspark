<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - 立候補者一覧</title>
    <link rel="stylesheet" href="{{ asset('css/people/style.css') }}">
</head>
<body>
    <!-- ========== ヘッダー（固定、コピペ用ここから） ========== -->
    <header class="header">
        <div class="header-top">
            <div class="header-logo">
                <a href="1.html">
                    <img src="{{ asset('images/Govspark.png') }}" alt="GovSpark">
                </a>
            </div>
            <button class="menu-button" id="menuButton" aria-label="メニュー">⋮</button>
        </div>
        <div class="header-info">
            <p class="location-text">{{$region_kanji}}{{$prefecture_kanji}}</p>
            <div class="topic-row">
                <p class="topic-text">【議題】</p>
                <div class="topic-select">
                    <select class="main-question" name="topic" aria-label="議題">
                        @foreach($topics as $topic)
                            <option value="{{ $topic }}">{{ $topic }}</option>
                        @endforeach
                    </select>
                    <span class="select-chevron" aria-hidden="true">▾</span>
                </div>
            </div>
        </div>
    </header>

    <!-- ハンバーガーメニュー -->
    <div class="menu-overlay" id="menuOverlay"></div>
    <nav class="menu-panel" id="menuPanel">
        <div class="menu-header">
            <button class="close-button" id="closeButton" aria-label="閉じる">×</button>
        </div>
        <ul class="menu-list">
            <li class="menu-item"><a href="8.html">検索する</a></li>
            <li class="menu-item"><a href="1.html">地区選択に戻る</a></li>
            <li class="menu-item"><a href="6.html">バグ報告</a></li>
        </ul>
    </nav>
    <!-- ========== ヘッダー（固定、コピペ用ここまで） ========== -->

    <!-- ========== メインコンテンツ（スクロール可能） ========== -->
    <main class="main-content">
        <div class="candidate-list">
            <!-- 立候補者 -->
            @foreach($comments_detail as $comment )
                <div class="candidate-item">
                    <div class="candidate-avatar" onclick="location.href='{{ route('politician.detail',['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                        <img src="{{ asset('images/politician/'.$comment['politician_image'].'.png') }}" alt="立候補者1">
                    </div>
                    <div class="candidate-info">
                        <div class="candidate-header">
                            <div>
                                <div class="candidate-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">{{$comment['politician_name']}}　{{$comment['party']}}</div>
                                <div class="candidate-party">{{$comment['body']}}</div>
                            </div>
                        </div>
                        <div class="candidate-meta">
                            <div class="candidate-tags">
                                @foreach($comment['tags'] as $tag)
                                    <span>#{{$tag}}</span>
                                @endforeach
                            </div>
                            <div class="candidate-date">{{$comment['created_at']}}</div>
                        </div>
                        <div class="candidate-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <!-- ========== メインコンテンツ（ここまで） ========== -->

    <!-- ========== フッター（固定、コピペ用ここから） ========== -->
    <footer class="footer">
        <button class="footer-button">
            <span class="icon-home"></span>
        </button>
        <button class="footer-button">
            <span class="icon-search"></span>
        </button>
    </footer>
    <!-- ========== フッター（固定、コピペ用ここまで） ========== -->

    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
