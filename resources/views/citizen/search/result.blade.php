<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpark - 検索結果</title>
    <link rel="stylesheet" href="{{ asset('css/people/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/people/politician.css') }}">
    <link rel="stylesheet" href="{{ asset('css/people/search.css?ver=2') }}">
</head>
<body>
    @include('partials.header')
    @include('partials.menu')

    <!-- 検索ボックス（固定） -->
    <div class="search-box-container">
        <div class="search-box" data-reload="true">
            <button type="button" class="search-icon-button" id="searchButton" aria-label="検索">🔍</button>
            <input type="text" class="search-input" id="searchInput" placeholder="#教育平等　#若者支援" value="">
        </div>
    </div>

    <!-- 検索結果タイトル（固定） -->
    <div class="search-result-header">
        <h1 class="search-title">検索結果</h1>
    </div>

    <!-- 検索結果コンテンツ（スクロール可能） -->
    <main class="search-content">
        <div class="profile-post-list">
            <!-- 検索結果1 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者1">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">山田 太郎 進歩党 <span class="new-badge">NEW</span></div>
                            <div class="profile-post-topic">議題：大学無償化 | 新宿区 東京都新宿市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        大学無償化は国の未来への投資です。教育格差をなくし、全ての若者に平等なチャンスを与えることが重要です。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#教育平等</span>
                            <span>#若者支援</span>
                        </div>
                        <div class="profile-post-date">1月12日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果2 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者2">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">佐藤 美咲 改革の党 <span class="new-badge">NEW</span></div>
                            <div class="profile-post-topic">議題：子育て支援 | 港区 東京都港市</div>
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
                        <div class="profile-post-date">1月11日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果3 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者3">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">田中 健一 未来党 <span class="new-badge">NEW</span></div>
                            <div class="profile-post-topic">議題：環境政策 | 中央区 東京都中央市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        2030年までに再生可能エネルギー比率を50%まで引き上げます。脱炭素社会の実現に向けて行動します。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#環境政策</span>
                            <span>#再生エネルギー</span>
                        </div>
                        <div class="profile-post-date">1月10日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果4 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者4">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">鈴木 麗子 市民党</div>
                            <div class="profile-post-topic">議題：地方創生 | 渋谷区 東京都渋谷市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        地方大学の振興と地元企業との連携を強化します。若者が地元で働ける環境を作ります。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#地方創生</span>
                            <span>#若者雇用</span>
                        </div>
                        <div class="profile-post-date">1月9日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果5 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者5">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">高橋 大輔 希望の党</div>
                            <div class="profile-post-topic">議題：医療制度 | 世田谷区 東京都世田谷市</div>
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
                        <div class="profile-post-date">1月8日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果6 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者6">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">中村 彩花 立憲党</div>
                            <div class="profile-post-topic">議題：働き方改革 | 品川区 東京都品川市</div>
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
                        <div class="profile-post-date">1月7日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果7 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者7">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">伊藤 修平 公明党</div>
                            <div class="profile-post-topic">議題：デジタル化 | 目黒区 東京都目黒市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        行政手続きの完全デジタル化を実現します。マイナンバーカードの利便性を高めます。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#DX推進</span>
                            <span>#行政改革</span>
                        </div>
                        <div class="profile-post-date">1月6日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果8 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者8">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">渡辺 真理 民主党</div>
                            <div class="profile-post-topic">議題：ジェンダー平等 | 杉並区 東京都杉並市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        男女の賃金格差をなくします。政治や企業のリーダー層における女性比率を高めます。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#ジェンダー平等</span>
                            <span>#女性活躍</span>
                        </div>
                        <div class="profile-post-date">1月5日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果9 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者9">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">小林 拓也 自由党</div>
                            <div class="profile-post-topic">議題：防災対策 | 豊島区 東京都豊島市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        災害に強い地域づくりを進めます。防災インフラの整備と住民への防災教育を充実させます。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#防災</span>
                            <span>#安全安心</span>
                        </div>
                        <div class="profile-post-date">1月4日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果10 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者10">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">加藤 由美 維新の党</div>
                            <div class="profile-post-topic">議題：観光振興 | 北区 東京都北市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        地域の魅力を世界に発信します。インバウンド観光の促進と地域経済の活性化を両立させます。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#観光</span>
                            <span>#地域振興</span>
                        </div>
                        <div class="profile-post-date">1月3日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果11 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者11">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">松本 隆志 国民党</div>
                            <div class="profile-post-topic">議題：多様性社会 | 荒川区 東京都荒川市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        障がいのある学生、外国人留学生、社会人学生など、全ての人に平等な教育機会を提供します。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#多様性</span>
                            <span>#教育機会</span>
                        </div>
                        <div class="profile-post-date">1月2日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 検索結果12 -->
            <div class="profile-post-item">
                <div class="profile-post-avatar" onclick="location.href='{{ route('politician.detail', ['prefecture' =>$prefecture_en ]) }}'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者12">
                </div>
                <div class="profile-post-content">
                    <div class="profile-post-header">
                        <div>
                            <div class="profile-post-name" onclick="location.href='{{ route('politician.detail', ['prefecture' => $prefecture_en]) }}'" style="cursor: pointer;">森田 翔太 社会党</div>
                            <div class="profile-post-topic">議題：若者政策 | 板橋区 東京都板橋市</div>
                        </div>
                    </div>
                    <div class="profile-post-text">
                        Z世代として訴えます。奨学金返済で苦しむ先輩たちを見てきました。無償化は待ったなしです。
                    </div>
                    <div class="profile-post-meta">
                        <div class="profile-post-tags">
                            <span>#若者政策</span>
                            <span>#奨学金</span>
                        </div>
                        <div class="profile-post-date">1月1日</div>
                    </div>
                    <div class="profile-post-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/menu.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchButton = document.getElementById('searchButton');
            if (!searchButton) return;

            searchButton.addEventListener('click', function() {
                window.location.href = window.location.href;
            });
        });
    </script>
</body>
</html>
