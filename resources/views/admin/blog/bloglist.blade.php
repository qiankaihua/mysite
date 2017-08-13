<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog管理界面</title>
    </head>
    <body>
        <form action="/addblog" methed="get">
            <input type="submit" value="创建新blog">
        </form>
        @foreach($blogs as $blog)
            <h1>{!! $blog->title !!}</h1>
            <p>{!! str_limit($blog->content, $limit = 50, $end = '...') !!}</p>
            <a href= {{ "/admin/blog/".$blog->id }}>view more</a>
            @if($blog->deleted_at === null)
            <form action={{"/api/blog/".$blog->id}} method="post">
                <input type="hidden" name="_method" value="DELETE" />
                <input type="submit" value="删除">
            </form>
            @else
                <form action={{"/api/blog/".$blog->id}} method="post">
                    <input type="submit" value="恢复">
                </form>
            @endif
        @endforeach
        {{ $blogs->links() }}
    </body>
</html>