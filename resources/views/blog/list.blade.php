@extends('blog.index')
@section('title')
    {{ $name }}
@endsection
@section('content')
    @foreach($blogs as $blog)
    <div class="cd-full-width first-slide container row col-md-12 content first-content" style="margin-top: 40px">
        <h1>{!! $blog->title !!}</h1>
        <p>{!! str_limit($blog->content, $limit = 10, $end = '...') !!}</p>
        <a href= {{ "/blog/".$blog->id }}>view more</a>
        <hr>
    </div>
    @endforeach
    <div id="pull_right">
       <div class="pull-right">
          {!! $blogs->links() !!}
       </div>
    </div>
@endsection
