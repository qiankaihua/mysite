<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>图片管理界面</title>
    </head>
    <body>
        <form action="/addimg" methed="get">
            <input type="submit" value="上传新图片">
        </form>
        @foreach($imgs as $img)
            <img src= {{ $img->url }} alt= {{"第".$img->id."张图片"}}>
            <p> {{$img->intro}} </p>
            @if($img->deleted_at === null)
            <form action={{"/api/image/".$img->id}} method="post">
                <input type="hidden" name="_method" value="DELETE" />
                <input type="submit" value="删除">
            </form>
            @else
                <form action={{"/api/image/".$img->id}} method="post">
                    <input type="submit" value="恢复">
                </form>
            @endif
            <form action={{"/admin/image/".$img->id}} method="get">
                <input type="submit" value="修改">
            </form>
        @endforeach
        {{ $imgs->links() }}
    </body>
</html>