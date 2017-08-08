<!DOCTYPE html>
<html class="no-js" lang="zh-CN">
 <h1>{!! $blog->title !!}</h1>
        <hr>
        <p style="text-align: left; word-wrap: break-word;">{!! $blog->content !!}</p>
<a href={{ "/admin/blog?page=".(($blog->id + 9 - (($blog->id+9)%10))/10) }}>返回首页</a>