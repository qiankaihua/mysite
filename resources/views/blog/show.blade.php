@extends('blog.index')
@section('title')
    {{ $blog->title }}
@endsection
@section('content')
<div style="text-align: center">
<div class="cd-full-width container row col-md-12 content first-content" style="margin-top: 80px !important; margin: 0 auto">
        <h1>{!! $blog->title !!}</h1>
        <hr>
        <p style="text-align: left; word-wrap: break-word;">{!! $blog->content !!}</p>
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