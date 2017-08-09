<form action={{"api/blog/".$blog->id}} method="post">
    <input type="hidden" name="_method" value="PUT" />
    title:<input type="text" name="title"><br>
    content:<br>
    <input type="textarea" name="content" rows="100" cols="100" style="width:600px;height:800px;"><br>
    <input type="submit">
</form>