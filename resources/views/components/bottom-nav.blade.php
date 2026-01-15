@php
  // ルート名がまだ無いから request()->is() の方が確実
  $isHome   = request()->is('comments') || request()->is('comments/*');
  $isSearch = request()->is('search')   || request()->is('search/*');
@endphp

<nav class="c-bottom-nav" aria-label="下部ナビ">
  <a href="{{ route('index') }}" class="c-bottom-nav__icon {{ $isHome ? 'is-active' : '' }}" aria-label="コメント一覧">
    {{-- アイコン（まずは絵文字でOK。後でSVGに差し替え可） --}}
    <span class="c-bottom-nav__icon" aria-hidden="true">🏠</span>
  </a>

  <a href="{{ url('/search') }}" class="c-bottom-nav__icon {{ $isSearch ? 'is-active' : '' }}" aria-label="検索">
    <span class="c-bottom-nav__icon" aria-hidden="true">🔎</span>
  </a>
</nav>
