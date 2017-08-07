@extends('blog.index')
@section('title')
    {{ $name }}
@endsection
@section('content')
    @foreach($blogs as $blog)
        <h1>{!! $blog->title !!}</h1>
        <p>{!! str_limit($blog->content, $limit = 10, $end = '...') !!}</p>
        <a href= {{ "/blog/".$blog->id }}>view more</a>
        <hr>
    @endforeach
@endsection
