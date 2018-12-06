<DOCTYPE HTML>
<html lang="ja">
<head>
@yield('head')
</head>
<body>
@yield('header')
<div class="contents">
    <div class="main" style="background-color:#FAFAFA;">
        @yield('content')
    </div>
    {{-- <div class="sub">
        @yield('sub')
        @yield('pageSub')
    </div> --}}
</div>
@yield('footer')
</body>
</html>