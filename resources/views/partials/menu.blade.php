<div class="menu-overlay" id="menuOverlay"></div>
<nav class="menu-panel" id="menuPanel">
    <div class="menu-header">
        <button class="close-button" id="closeButton" aria-label="閉じる">×</button>
    </div>
    <ul class="menu-list">
        <li class="menu-item"><a href="{{ route('search', ['prefecture' => $prefecture_en ?? null]) }}">検索する</a></li>
        <li class="menu-item"><a href="{{ route('regions') }}">地区選択に戻る</a></li>
        <li class="menu-item"><a href="{{ route('report', ['prefecture' => $prefecture_en ?? null]) }}">バグ報告</a></li>
    </ul>
</nav>
