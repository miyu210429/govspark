<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - バグ報告</title>
    <link rel="stylesheet" href="{{ asset('css/people/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/people/form.css') }}">
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

    <!-- 戻るボタン -->
    <div class="back-nav">
        <a href="javascript:history.back()" class="back-link">
            <span class="back-arrow">←</span>
            <span>戻る</span>
        </a>
    </div>

    <!-- フォームコンテンツ -->
    <div class="form-content">
        <h1 class="form-title">バグ報告</h1>

        <form class="bug-report-form" id="bugReportForm">
            <!-- カテゴリ選択 -->
            <div class="form-group">
                <label for="categorySelect" class="form-label">カテゴリ</label>
                <select id="categorySelect" class="form-select" required>
                    <option value="">一選択してください一</option>
                    <option value="display">表示に関する問題</option>
                    <option value="operation">操作に関する問題</option>
                    <option value="data">データに関する問題</option>
                    <option value="other">その他</option>
                </select>
            </div>

            <!-- 詳細入力 カテゴリ選択するまで入力できない-->
            <div class="form-group">
                <label for="detailTextarea" class="form-label">詳細</label>
                <textarea 
                    id="detailTextarea" 
                    class="form-textarea" 
                    placeholder="入力" 
                    disabled
                    required
                ></textarea>
            </div>

            <!-- 送信ボタン 全部入力するまで押せない -->
            <div class="submit-button-wrapper">
                <button type="submit" class="submit-button" id="submitButton" disabled>
                    送信する
                </button>
            </div>
        </form>
    </div>

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
    <script src="{{ asset('js/form.js') }}"></script>
</body>
</html>
