<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - 佐藤美咲</title>
    <link rel="stylesheet" href="{{ asset('css/people/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/people/politician.css') }}">
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

    <!-- プロフィールヘッダー -->
    <div class="profile-header">
        <div class="profile-avatar-large">
            <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
        </div>
        <div class="profile-info">
            <div class="profile-name">佐藤 美咲</div>
            <div class="profile-party">進歩党</div>
            <div class="profile-tags">
                <span>#教育平等</span>
                <span>#若者支援</span>
            </div>
            <div class="profile-info-list">
                <div>自己紹介: 教育改革と若者支援に尽力します</div>
                <div>関連サイト: https://sato-misaki.jp</div>
            </div>
        </div>
    </div>

    <!-- タブナビゲーション（固定） -->
    <nav class="tab-nav">
        <button class="tab-button active" data-tab="post">Post</button>
        <button class="tab-button" data-tab="answer">Answer</button>
    </nav>

    <!-- ========== タブコンテンツ（スクロール可能） ========== -->
    <div class="tab-content">
        <!-- Postタブ -->
        <div class="tab-panel active" id="post">
            <div class="profile-post-list">
                <!-- 投稿1 -->
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
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿2 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：子育て支援</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            保育所待機児童ゼロを目指します。保育士の給与を大幅に改善し、質の高い保育環境を整備します。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#子育て</span>
                                <span>#保育</span>
                            </div>
                            <div class="profile-post-date">1月11日 14:20</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿3 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：地方創生</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            地方大学の振興と地元企業との連携を強化します。若者が地元で働ける環境を作り、人口流出を防ぎます。デジタル技術を活用した地方創生を推進します。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#地方創生</span>
                                <span>#若者雇用</span>
                            </div>
                            <div class="profile-post-date">1月10日 16:45</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿4 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：働き方改革</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            週休3日制の導入を提案します。ワークライフバランスの改善は生産性向上にもつながります。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#働き方改革</span>
                                <span>#ワークライフバランス</span>
                            </div>
                            <div class="profile-post-date">1月9日 11:30</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿5 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：環境政策</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            2030年までに再生可能エネルギー比率を50%まで引き上げます。脱炭素社会の実現に向けて、グリーン産業への投資を拡大します。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#環境政策</span>
                                <span>#再生エネルギー</span>
                            </div>
                            <div class="profile-post-date">1月8日 13:15</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿6 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：医療制度</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            誰もが安心して医療を受けられる社会を目指します。地域医療の充実と医療従事者の待遇改善を進めます。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#医療改革</span>
                                <span>#地域医療</span>
                            </div>
                            <div class="profile-post-date">1月7日 10:05</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿7 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：デジタル化</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            行政手続きの完全デジタル化を実現します。マイナンバーカードの利便性を高め、オンラインで全ての手続きができる社会を構築します。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#DX推進</span>
                                <span>#行政改革</span>
                            </div>
                            <div class="profile-post-date">1月6日 15:50</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿8 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：ジェンダー平等</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            男女の賃金格差をなくします。政治や企業のリーダー層における女性比率を高め、真のジェンダー平等社会を実現します。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#ジェンダー平等</span>
                                <span>#女性活躍</span>
                            </div>
                            <div class="profile-post-date">1月5日 09:40</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿9 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：防災対策</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            災害に強い地域づくりを進めます。防災インフラの整備と住民への防災教育を充実させ、被害を最小限に抑えます。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#防災</span>
                                <span>#安全安心</span>
                            </div>
                            <div class="profile-post-date">1月4日 14:25</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>

                <!-- 投稿10 -->
                <div class="profile-post-item">
                    <div class="profile-post-avatar">
                        <img src="{{ asset('images/politician/2.png') }}" alt="佐藤美咲">
                    </div>
                    <div class="profile-post-content">
                        <div class="profile-post-header">
                            <div>
                                <div class="profile-post-name">佐藤 美咲 進歩党</div>
                                <div class="profile-post-topic">議題：観光振興</div>
                            </div>
                        </div>
                        <div class="profile-post-text">
                            地域の魅力を世界に発信します。インバウンド観光の促進と地域経済の活性化を両立させる施策を展開します。
                        </div>
                        <div class="profile-post-meta">
                            <div class="profile-post-tags">
                                <span>#観光</span>
                                <span>#地域振興</span>
                            </div>
                            <div class="profile-post-date">1月3日 11:10</div>
                        </div>
                        <div class="profile-post-actions">
                            <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Answerタブ -->
        <div class="tab-panel" id="answer">
            <div class="profile-post-list">
                <div style="padding: 40px 20px; text-align: center; color: #999;">
                    回答はまだありません
                </div>
            </div>
        </div>
    </div>
    <!-- ========== タブコンテンツ（ここまで） ========== -->

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
    <script>
        // タブ切り替え機能
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanels = document.querySelectorAll('.tab-panel');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');

                    // すべてのタブボタンとパネルから active クラスを削除
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabPanels.forEach(panel => panel.classList.remove('active'));

                    // クリックされたタブボタンと対応するパネルに active クラスを追加
                    this.classList.add('active');
                    document.getElementById(targetTab).classList.add('active');
                });
            });
        });
    </script>
</body>
</html>
