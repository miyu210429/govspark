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
                <a href="{{ route('regions') }}">
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
    @include('partials.menu')
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en]) }}'">
                                <span class="icon-megaphone"></span>
                            </button>
                            <button class="action-icon" aria-label="共有">
                                <span class="icon-link"></span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <!-- ========== メインコンテンツ（ここまで） ========== -->

    <!-- ========== フッター（固定、コピペ用ここから） ========== -->
    @include('partials.footer')
    <!-- ========== フッター（固定、コピペ用ここまで） ========== -->

    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
