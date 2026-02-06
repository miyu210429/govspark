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
    @include('partials.header')
    @include('partials.menu')

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
                <div>公式HP: https://sato-misaki.jp</div>
            </div>
        </div>
    </div>

    <!-- ========== メインコンテンツ（スクロール可能） ========== -->
    <div class="tab-content">
        <div class="tab-panel active">
            <div class="profile-post-list">
                <!-- 投稿1 -->
                <div class="profile-post-item" data-post-id="1">
                    <div class="post-main">
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
                                <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' =>  $prefecture_en]) }}'">📢</button>
                                <button class="action-icon" aria-label="共有">🔗</button>
                            </div>
                        </div>
                    </div>

                    <!-- 批判コメントセクション -->
                    <div class="criticism-section" style="display: none;">
                        <!-- 批判1 -->
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：大学無償化</div>
                                <div class="criticism-text">消費税増税は低所得者層にも負担が大きいのでは？財源確保の方法を見直すべきでは？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月13日 10:20</div>
                                </div>
                                <div class="answer-text">消費税の教育目的税化は、低所得者への還付制度や軽減税率の拡充と併せて実施します。また、法人税の見直しや高所得者への累進課税強化も検討し、負担の公平性を確保します。</div>
                            </div>
                        </div>

                        <!-- 批判2 -->
                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：大学無償化</div>
                                <div class="criticism-text">全ての大学を対象にすると質の低い大学も支援することになりませんか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月13日 11:45</div>
                                </div>
                                <div class="answer-text">大学の質を担保するため、第三者機関による定期的な評価制度を導入します。教育内容や就職実績などの基準を満たさない大学には、改善を求め、必要に応じて支援の見直しも検討します。</div>
                            </div>
                        </div>

                        <!-- 批判3 -->
                        <div class="criticism-item" data-index="2" style="display: none;">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：大学無償化</div>
                                <div class="criticism-text">私立大学の授業料も全額負担するのは不公平では？国立大学のみにすべきでは？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月13日 15:30</div>
                                </div>
                                <div class="answer-text">教育の機会均等の観点から、国公立・私立を問わず支援すべきと考えます。ただし、私立大学には授業料の上限設定を導入し、過度な高額化を防止します。学生の選択肢を広げることが重要です。</div>
                            </div>
                        </div>

                        <!-- 批判4 -->
                        <div class="criticism-item" data-index="3" style="display: none;">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：大学無償化</div>
                                <div class="criticism-text">無償化より奨学金の返済免除制度を充実させる方が効果的ではないですか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月14日 09:15</div>
                                </div>
                                <div class="answer-text">無償化と奨学金返済支援は並行して進めるべき施策です。現在返済に苦しむ方々への支援も重要ですが、将来世代が借金を背負わない仕組みを作ることで、根本的な解決を目指します。</div>
                            </div>
                        </div>

                        <button class="show-more-criticisms">もっと批判と回答を表示</button>
                    </div>
                </div>

                <!-- 投稿2 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：子育て支援</div>
                                <div class="criticism-text">保育士の給与改善の財源はどこから確保しますか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月12日 09:30</div>
                                </div>
                                <div class="answer-text">子ども・子育て支援金を活用し、保育士の処遇改善に充てます。具体的には、月額3万円以上の給与引き上げを目指します。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：子育て支援</div>
                                <div class="criticism-text">保育所の場所確保は具体的にどう進めますか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月12日 11:45</div>
                                </div>
                                <div class="answer-text">公共施設の空きスペース活用と民間企業との連携により、保育所を増設します。3年以内に待機児童ゼロを実現します。</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 投稿3 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：地方創生</div>
                                <div class="criticism-text">地方大学と企業の連携は具体的にどう進めますか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月11日 10:00</div>
                                </div>
                                <div class="answer-text">産学連携プログラムを拡充し、地元企業でのインターンシップ制度を強化します。卒業後の地元就職支援も行います。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：地方創生</div>
                                <div class="criticism-text">若者が地元に残るインセンティブは何ですか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月11日 14:20</div>
                                </div>
                                <div class="answer-text">地元就職者への奨学金返済支援や住宅補助を実施します。魅力的な職場環境づくりにも取り組みます。</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 投稿4 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：働き方改革</div>
                                <div class="criticism-text">週休3日制で給与は維持されますか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月10日 13:00</div>
                                </div>
                                <div class="answer-text">給与は現状維持を前提とします。業務効率化と生産性向上により、労働時間の短縮と給与維持を両立できます。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：働き方改革</div>
                                <div class="criticism-text">中小企業でも実現可能ですか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月10日 16:15</div>
                                </div>
                                <div class="answer-text">中小企業への導入支援金制度を設けます。段階的な導入を促進し、企業規模に応じた柔軟な対応を認めます。</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 投稿5 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：環境政策</div>
                                <div class="criticism-text">50%の目標は現実的ですか？安定供給はどう確保しますか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月9日 09:45</div>
                                </div>
                                <div class="answer-text">技術革新と国際協力により十分達成可能です。蓄電技術やスマートグリッドで安定供給を実現します。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：環境政策</div>
                                <div class="criticism-text">グリーン産業への投資で雇用は創出されますか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月9日 15:20</div>
                                </div>
                                <div class="answer-text">太陽光、風力発電などの新産業で多数の雇用を生みます。従来産業からの転換支援も充実させます。</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 投稿6 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：医療制度</div>
                                <div class="criticism-text">医師不足の地域でどう対応しますか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月8日 11:30</div>
                                </div>
                                <div class="answer-text">地域医療に従事する医師への奨学金免除や手当支給を充実させます。オンライン診療も推進します。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：医療制度</div>
                                <div class="criticism-text">医療従事者の待遇改善の財源は？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月8日 14:50</div>
                                </div>
                                <div class="answer-text">診療報酬の見直しと医療保険制度の改革で財源を確保します。予防医療の推進で医療費全体を抑制します。</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 投稿7 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：デジタル化</div>
                                <div class="criticism-text">デジタルに不慣れな高齢者への対応は？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月7日 10:00</div>
                                </div>
                                <div class="answer-text">各自治体にデジタル支援窓口を設置し、丈寧なサポートを提供します。紙の手続きも当面併用します。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：デジタル化</div>
                                <div class="criticism-text">セキュリティ対策は十分ですか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月7日 13:15</div>
                                </div>
                                <div class="answer-text">最先端の暗号化技術とゼロトラストセキュリティを導入します。定期的なセキュリティ監査も実施します。</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 投稿8 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：ジェンダー平等</div>
                                <div class="criticism-text">賃金格差解消の具体的な方法は？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月6日 11:20</div>
                                </div>
                                <div class="answer-text">同一労働同一賃金の徹底と賃金情報の開示義務化を推進します。違反企業への罰則も強化します。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：ジェンダー平等</div>
                                <div class="criticism-text">女性比率の目標はどれくらいですか？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月6日 15:40</div>
                                </div>
                                <div class="answer-text">2030年までに政治や企業幹部での女性比率50%を目指します。段階的なクォータ制も検討します。</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：防災対策</div>
                                <div class="criticism-text">防災インフラ整備の財源は？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月5日 09:50</div>
                                </div>
                                <div class="answer-text">国土強靴化予算の重点配分と防災目的税の導入を検討します。防災は未来への投資です。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：防災対策</div>
                                <div class="criticism-text">防災教育の具体的な内容は？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月5日 14:30</div>
                                </div>
                                <div class="answer-text">学校での実践的な避難訓練と地域単位の防災ワークショップを定期開催します。家庭内での備蓄も推奨します。</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 投稿10 -->
                <div class="profile-post-item">
                    <div class="post-main">
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
                            <button class="action-icon" aria-label="通知" onclick="location.href='{{ route('critique', ['prefecture' => $prefecture_en ]) }}'">📢</button>
                            <button class="action-icon" aria-label="共有">🔗</button>
                        </div>
                    </div>
                    </div>

                    <div class="criticism-section" style="display: none;">
                        <div class="criticism-item" data-index="0">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：観光振興</div>
                                <div class="criticism-text">インバウンド依存は地域経済にリスクでは？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月4日 10:30</div>
                                </div>
                                <div class="answer-text">国内観光とのバランスを取りながら進めます。地域産業の多様化も同時に推進し、持続可能な観光を目指します。</div>
                            </div>
                        </div>

                        <div class="criticism-item" data-index="1">
                            <div class="criticism-question">
                                <div class="criticism-label">議題：観光振興</div>
                                <div class="criticism-text">オーバーツーリズムへの対策は？</div>
                            </div>
                            <div class="criticism-answer">
                                <div class="answer-header">
                                    <div class="answer-info">
                                        <div class="answer-name">回答</div>
                                    </div>
                                    <div class="answer-date">1月4日 14:15</div>
                                </div>
                                <div class="answer-text">観光客の分散化や予約制の導入、地域住民との共生を重視した観光地づくりを進めます。</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== メインコンテンツ（ここまで） ========== -->

    @include('partials.footer')

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/criticism-toggle.js') }}"></script>
</body>
</html>
