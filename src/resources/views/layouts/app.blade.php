<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/login">
                Atte
            </a>
            <a href="/">ホーム</a>
            <a href="/attendance/{num}">日付一覧</a>
            <a href="/login">ログアウト</a>
        </div>
    </header>

    <main>
        <div class="content">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <span>Atte,Inc.</span>
        </div>
    </footer>
</body>

</html>