<!--引入样式文件->
        <link rel="stylesheet" href="/editor.md-master/examples/css/style.css" />
        <link rel="stylesheet" href="/editor.md-master/css/editormd.preview.css" /-->
        <link rel="stylesheet" href="/editor.md-master/css/editormd.css" />
        <!--link rel="stylesheet" href="/css/bootstrap.min.css"-->
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/fontAwesome.css">

        <!--引入js文件->
        <script src="/editor.md-master/examples/js/jquery.min.js"></script>
        <script src="/editor.md-master/lib/marked.min.js"></script>
        <script src="/editor.md-master/lib/prettify.min.js"></script>
        <script src="/editor.md-master/lib/raphael.min.js"></script>
        <script src="/editor.md-master/lib/underscore.min.js"></script>
        <script src="/editor.md-master/lib/sequence-diagram.min.js"></script>
        <script src="/editor.md-master/lib/flowchart.min.js"></script>
        <script src="/editor.md-master/lib/jquery.flowchart.min.js"></script>
        <script src="/editor.md-master/editormd.js"></script-->
<link href="https://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">  
<script src="https://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<script >hljs.initHighlightingOnLoad();</script>

@extends('blog.index')
@section('title')
    {{ $blog->title }}
@endsection
@section('content')

<div style="text-align: center">
<div class="cd-full-width container row col-md-12 content first-content" style="margin-top: 80px !important; margin: 0 auto">
        <h1>{{ $blog->title }}</h1>
        <hr style="margin-top: 20px">
        <div class="markdown-body editormd-preview-container" style="text-align: left; margin-top: 20px">
        {!! $blog->content !!}
        </div>
        <!--div id="testEditorMdview">
            <textarea id="appendTest" style="display:none;">mdToHml({{ $blog->content }})</textarea>
        </div-->
        @if($lastblog->id === $blog->id)
            <p>上一篇：<a href="" id="disabled">已经是最前面一篇了</a></p>
        @else
            <p>上一篇：<a href= {{ "/blog/".$lastblog->id }}>{{$lastblog->title}}</a></p>
        @endif
        @if($nextblog->id === $blog->id)
            <p>下一篇：<a href="" id="disabled">已经是最后面一篇了</a></p>
        @else
            <p>下一篇：<a href= {{ "/blog/".$nextblog->id }}>{{$nextblog->title}}</a></p>
        @endif
        <li class="menu-item">
            <a href= {{ "/blog/bloglist?page=".(($blog->id + 9 - (($blog->id+9)%10))/10) }}>回到blog列表</a>
        </li>
</div>
</div>
@endsection


<script type="text/javascript"> 

        //markDown转HTMl的方法
        function mdToHml(){

            //先对容器初始化，在需要展示的容器中创建textarea隐藏标签，
            $("#testEditorMdview").html('<textarea id="appendTest" style="display:none;"></textarea>');
            var content=$("#demo1").val();//获取需要转换的内容
            $("#appendTest").val(content);//将需要转换的内容加到转换后展示容器的textarea隐藏标签中

            //转换开始,第一个参数是上面的div的id
            editormd.markdownToHTML("testEditorMdview", {
                htmlDecode: "style,script,iframe", //可以过滤标签解码
                emoji: true,
                taskList:true,
                tex: true,               // 默认不解析
                flowChart:true,         // 默认不解析
                sequenceDiagram:true,  // 默认不解析
            });
        }
    </script>
