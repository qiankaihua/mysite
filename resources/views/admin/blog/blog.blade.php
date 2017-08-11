<!DOCTYPE html>
<html class="no-js" lang="zh-CN"><script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <script type='text/javascript' src="/js/all.js"></script>
    <link rel="stylesheet" href="/css/templatemo-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="/editor.md-master/css/editormd.css" />

        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/fontAwesome.css">
<!--link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet"-->  
<script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<script >hljs.initHighlightingOnLoad();</script>
<body style="background-color: #afafaf">
<div style="text-align: center">
<div class="cd-full-width container row col-md-12 content first-content" style="margin-top: 80px !important; margin: 0 auto">
        <h1>{{ $blog->title }}</h1>
        <hr style="margin-top: 20px">
        <div class="markdown-body editormd-preview-container" style="text-align: left; margin-top: 20px">
        {!! $blog->content !!}
        </div>
</div>

 <!--h1>{!! $blog->title !!}</h1>
        <hr>
        <div class="cd-full-width container row col-md-12 content first-content" style="margin-top: 80px !important; margin: 0 auto">
                <div class="markdown-body editormd-preview-container" style="text-align: left; word-wrap: break-word;">{!! $blog->content !!}</div>
        </div-->
<a href={{ "/admin/blog/update/".$blog->id }}>修改文章</a>
<a href={{ "/admin/blog?page=".(($blog->id + 9 - (($blog->id+9)%10))/10) }}>返回首页</a>
</div>
</body>