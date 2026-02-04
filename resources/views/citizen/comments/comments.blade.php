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
            <p class="location-text">東北地区山形県</p>
            <p class="topic-text">【議題】</p>
            <h1 class="main-question">大学無償化についてどう考えるか</h1>
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
            <!-- 立候補者1 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者1">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">田中 健太 未来党</div>
                            <div class="candidate-party">大学無償化は国の未来への投資です。教育格差をなくし、全ての若者に平等なチャンスを与えることで、イノベーションと経済成長を実現できます。財源は法人税の見直しと社会保障の効率化で確保し、段階的に実施していきます。教育の質を維持しながら、誰もが安心して学べる社会を目指します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#教育改革</span>
                            <span>#未来投資</span>
                        </div>
                        <div class="candidate-date">1月10日 14:30</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者2 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者3">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">佐藤 美咲 進歩党</div>
                            <div class="candidate-party">無償化に全面賛成です。私自身、奨学金の返済に苦しんだ経験があります。若者が借金を背負わずに学べる環境を作ることは、少子化対策にもつながります。所得制限を設けず、全学生を対象とすることで、真の教育平等を実現します。予算は消費税の教育目的税化で確保します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#教育平等</span>
                            <span>#若者支援</span>
                        </div>
                        <div class="candidate-date">1月12日 09:15</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者3 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者2">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">山本 誠 保守新党</div>
                            <div class="candidate-party">慎重な検討が必要です。完全無償化は財政負担が大きすぎます。まずは低所得世帯への支援を拡充し、給付型奨学金を増やすべきです。大学の質の向上と定員適正化も同時に進める必要があります。無償化よりも、卒業後の就職支援や返済不要の奨学金制度の充実を優先します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#段階的支援</span>
                            <span>#財政責任</span>
                        </div>
                        <div class="candidate-date">1月11日 16:45</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者4 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者5">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">鈴木 麗子 市民の声党</div>
                            <div class="candidate-party">地方大学の振興と合わせて実施すべきです。無償化により都市部への学生集中が加速する懸念があります。地方創生の観点から、地元大学への進学者には追加支援を行い、卒業後の地域定着を促進します。教育の機会均等と地方活性化を両立させる制度設計が重要です。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#地方創生</span>
                            <span>#教育改革</span>
                        </div>
                        <div class="candidate-date">1月13日 11:20</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者5 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者4">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">高橋 大輔 経済優先党</div>
                            <div class="candidate-party">大学改革とセットで進めるべきです。無償化だけでは不十分で、大学の国際競争力向上、就職率の改善、実学重視のカリキュラム改革が必要です。理系・医療系など国家戦略上重要な分野を優先し、産業界との連携を強化します。投資対効果を重視した教育政策を実現します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#大学改革</span>
                            <span>#競争力強化</span>
                        </div>
                        <div class="candidate-date">1月9日 13:50</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者6 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者6">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">中村 彩花 福祉第一党</div>
                            <div class="candidate-party">子育て世帯の負担軽減として強く推進します。教育費の心配がなくなれば、安心して子どもを産み育てられます。高校までの教育無償化は実現したので、次は大学です。奨学金返済で結婚や出産を諦める若者を救います。財源は防衛費の見直しと富裕層への課税強化で確保します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#子育て支援</span>
                            <span>#少子化対策</span>
                        </div>
                        <div class="candidate-date">1月14日 10:05</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者7 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者7">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">伊藤 修平 維新連合</div>
                            <div class="candidate-party">デジタル時代に合わせた新しい教育モデルが必要です。従来の4年制大学だけでなく、オンライン教育や職業訓練校も無償化の対象とすべきです。学び直しを希望する社会人にも門戸を開き、生涯学習社会を実現します。形だけの大学より、実践的なスキルが身につく教育を重視します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#生涯学習</span>
                            <span>#実践教育</span>
                        </div>
                        <div class="candidate-date">1月15日 15:30</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者8 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者8">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">渡辺 真理 立憲民主党</div>
                            <div class="candidate-party">憲法が保障する教育の機会均等を実現するため、無償化は必須です。親の収入で子どもの未来が決まる社会を変えます。国立大学の授業料値上げを凍結し、私立大学への助成も拡充します。教育への公的支出をOECD平均まで引き上げることで、質の高い教育環境を整備します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#機会均等</span>
                            <span>#憲法理念</span>
                        </div>
                        <div class="candidate-date">1月11日 08:40</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者9 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者9">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">小林 拓也 自由党</div>
                            <div class="candidate-party">民間活力を活用した教育ローンの充実が現実的です。完全無償化は税金の無駄遣いになりかねません。意欲ある学生には支援しますが、安易な大学進学を助長すべきではありません。企業による奨学金制度や、卒業後の就職とセットにした支援など、市場原理を活かした仕組みを構築します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#市場原理</span>
                            <span>#効率化</span>
                        </div>
                        <div class="candidate-date">1月10日 17:20</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者10 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/1.png') }}" alt="立候補者10">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">加藤 由美 緑の党</div>
                            <div class="candidate-party">持続可能な社会を作るため、環境・エネルギー分野の人材育成と連動させるべきです。これらの分野を専攻する学生を優先的に支援し、グリーン経済への移行を加速します。また、大学での環境教育を必修化し、気候変動対策を担う次世代を育成します。教育と環境政策を一体で推進します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#環境政策</span>
                            <span>#人材育成</span>
                        </div>
                        <div class="candidate-date">1月12日 14:10</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者11 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/2.png') }}" alt="立候補者11">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">松本 隆志 共生党</div>
                            <div class="candidate-party">多様性を重視した教育改革が重要です。障がいのある学生、外国人留学生、社会人学生など、全ての人に平等な教育機会を提供します。無償化と合わせて、バリアフリー化、多言語対応、夜間・通信制の充実を進めます。誰一人取り残さない、インクルーシブな高等教育を実現します。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#多様性</span>
                            <span>#包摂社会</span>
                        </div>
                        <div class="candidate-date">1月13日 16:55</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>

            <!-- 立候補者12 -->
            <div class="candidate-item">
                <div class="candidate-avatar" onclick="location.href='4-5.html'" style="cursor: pointer;">
                    <img src="{{ asset('images/politician/3.png') }}" alt="立候補者12">
                </div>
                <div class="candidate-info">
                    <div class="candidate-header">
                        <div>
                            <div class="candidate-name" onclick="location.href='4-5.html'" style="cursor: pointer;">森田 翔太 若者の党</div>
                            <div class="candidate-party">Z世代として訴えます。奨学金返済で苦しむ先輩たちを見てきました。無償化は待ったなしです。同時に、大学だけでなく専門学校、プログラミングスクールなど、多様な学びの場も支援対象にすべきです。若者の可能性を最大限引き出す教育投資こそが、日本の未来を切り拓きます。</div>
                        </div>
                    </div>
                    <div class="candidate-meta">
                        <div class="candidate-tags">
                            <span>#若者の声</span>
                            <span>#未来投資</span>
                        </div>
                        <div class="candidate-date">1月15日 12:25</div>
                    </div>
                    <div class="candidate-actions">
                        <button class="action-icon" aria-label="通知" onclick="location.href='9.html'">📢</button>
                        <button class="action-icon" aria-label="共有">🔗</button>
                    </div>
                </div>
            </div>
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
