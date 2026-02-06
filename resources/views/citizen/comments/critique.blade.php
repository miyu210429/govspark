<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - 批判する</title>
    <link rel="stylesheet" href="{{ asset('css/people/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/people/politician.css') }}">
    <link rel="stylesheet" href="{{ asset('css/people/correction-form.css') }}">
</head>
<body data-return-url="{{ route('index', ['prefecture' => $prefecture_en]) }}">
    <!-- ========== ヘッダー（固定、コピペ用ここから） ========== -->
    @include('partials.header')

    <!-- ハンバーガーメニュー -->
    @include('partials.menu')
    <!-- ========== ヘッダー（固定、コピペ用ここまで） ========== -->

    <!-- 戻るボタン -->
    <div class="back-button-container">
        <button class="back-button" id="backButton" aria-label="戻る">
            <span class="back-arrow">←</span>
            <span class="back-cross">戻る</span>
        </button>
    </div>

    <!-- メインコンテンツ -->
    <main class="correction-content">
        <h1 class="form-title">以下の意見を批判する</h1>

        <form id="correctionForm" class="correction-form">
            <!-- 投稿情報 -->
            <div class="post-info-card">
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：大学無償化</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            全面的に大学無償化を支持します。教育の機会均等は民主主義の基本です。財源は消費税の教育目的税化で確保します。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#教育平等</span>
                                <span>#若者支援</span>
                            </div>
                            <div class="profile-post-date">1月12日 09:15</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- テキストエリア -->
            <div class="textarea-container">
                <textarea
                    id="correctionText"
                    class="correction-textarea"
                    placeholder="この投稿は公開されます、誹謗中傷は決して行わないでください"
                    rows="8"
                    required
                ></textarea>
            </div>

            <!-- 送信ボタン -->
            <button type="submit" class="submit-button">送信する</button>
        </form>
    </main>

    <!-- ========== フッター（固定、コピペ用ここから） ========== -->
    @include('partials.footer')
    <!-- ========== フッター（固定、コピペ用ここまで） ========== -->

    <!-- ポップアップ -->
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-message">
            <p>送信しました！</p>
            <p class="countdown-text"><span id="countdown">3</span>秒後に前のページに戻ります</p>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/correction-form.js') }}"></script>
</body>
</html>
