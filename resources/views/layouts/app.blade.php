<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'GovSpark')</title>

  {{-- フォント --}}
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  {{-- 共通CSS --}}
  <link rel="stylesheet" href="{{ asset('css/citizens.css') }}">
  {{-- コメント画面用CSSなどを後で追加してOK --}}
  @stack('styles')
</head>

<body class="@yield('bodyClass')">

  {{-- 共通ヘッダー --}}
  @include('components.header')

  {{-- 各ページの中身 --}}
  <main>
    @yield('content')
  </main>
  {{-- ページごとの下ナビ --}} 
  @yield('bottomNav')

  @stack('scripts')
</body>
</html>
