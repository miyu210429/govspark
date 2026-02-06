<footer class="footer">
    <a class="footer-button" href="{{ route('index',['prefecture' => $prefecture_en]) }}" aria-label="ホーム">
        <span class="icon-home"></span>
    </a>
    <a class="footer-button" href="{{ route('search',['prefecture' => $prefecture_en]) }}" aria-label="検索">
        <span class="icon-search"></span>
    </a>
</footer>
