<!DOCTYPE html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title')</title>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <script type='text/javascript' src="/js/all.js"></script>
</head>
<body>
<div id="wrapper">

    @yield('content')

    <nav class="nav-container group" id="nav-footer">
        <div class="nav-wrap">
            <ul class="nav container group">
                <li class="menu-item">
                    <a href="/">回到首页</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
</body>
</html>