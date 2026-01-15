@extends('layouts.app')

@section('title', 'GovSpark - コメント')

{{-- PC用ページクラス --}}
@section('bodyClass', 'page--feed')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/comments.css') }}?v=1">
@endpush

@section('content')
<div class="feed-layout">
  {{-- 左サイド（威圧感弱め：アイコン＋短いラベル） --}}
  <aside class="side" aria-label="サイドナビ">
   

    <nav class="side__nav" aria-label="メニュー">
      <a class="side__item is-active" href="#">
        <span class="side__icon">🏠</span>
        <span class="side__label">ホーム</span>
      </a>
      <a class="side__item" href="#">
        <span class="side__icon">🔎</span>
        <span class="side__label">検索</span>
      </a>
      <a class="side__item" href="#">
        <span class="side__icon">🗳️</span>
        <span class="side__label">立候補者</span>
      </a>
      <a class="side__item" href="#">
        <span class="side__icon">💬</span>
        <span class="side__label">コメント</span>
      </a>
    </nav>

    <div class="side__footer">
      <a class="side__btn" href="/regions">← 地方選択へ</a>
    </div>
  </aside>

  {{-- 中央：メイン（Xのタイムラインっぽい） --}}
  <main class="center" aria-label="投稿一覧">
    <header class="center__header">
      <div class="center__meta">○○地区 ○○県</div>
      <div class="center__topic">【議題】<br><span>○○についてどう考えるか</span></div>
    </header>

    <section class="feed" aria-label="投稿リスト">
      {{-- 見た目だけ：とりあえず4〜10件並べる --}}
      @for($i = 1; $i <= 10; $i++)
        <article class="post">
          <div class="post__avatar" aria-hidden="true"></div>

          <div class="post__body">
            <div class="post__top">
              <div class="post__name">立候補者名{{ $i }} <span class="post__party">○○党</span></div>
              <div class="post__rightmeta">#○○ #○○　0月0日　00:00</div>
            </div>

            <div class="post__text">
              見本テキスト。議題に対するコメントがここに入ります。長い場合は数行で省略されます。
            </div>

            <div class="post__actions" aria-label="アクション">
              <button class="post__iconbtn" type="button" aria-label="拡声">📣</button>
              <button class="post__iconbtn" type="button" aria-label="共有">↗︎</button>
            </div>
          </div>
        </article>
      @endfor
    </section>
  </main>

  @section('bottomNav')
  @include('components.bottom-nav')
  @endsection

  {{-- 右サイド（圧を出さない：薄い補助枠。不要なら丸ごと消してOK） --}}
  <aside class="right" aria-label="補助">
    <div class="panel">
      <div class="panel__title">絞り込み</div>
      <div class="panel__row">
        <span class="tag">#○○</span>
        <span class="tag">#○○</span>
      </div>
      <div class="panel__hint">※後で検索・並び替えを入れられる枠</div>
    </div>

    <div class="panel">
      <div class="panel__title">この議題の要点</div>
      <div class="panel__hint">
        ここに議題の説明文（短め）を入れる想定。威圧感が出ないように文字サイズは控えめ。
      </div>
    </div>
  </aside>

</div>
@endsection
