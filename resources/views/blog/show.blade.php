@extends('blog.index')
@section('title')
    {{ $blog->title }}
@endsection
@section('content')
<div class="cd-full-width first-slide container row col-md-12 content first-content" style="margin-top: 40px">
        <h1>{!! $blog->title !!}</h1>
        <hr>
        <p style="text-align: left">{!! $blog->content !!}</p>
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
@endsection