<body>
<script>
    function updateimage()
    {
        document.getElementById("update").submit();
    }
</script>

<form id="update" action={{"/api/image/".$img->id}} enctype="multipart/form-data" method="post">
        <input type="hidden" name="_method" value="PUT">
        修改图片简介：<input type="text" name="intro" value= {{ $img->intro }} ><br>
        <img src= {{ $img->url }} alt="{{$img->intro}}"><br>
        <input type="button" value="提交" onclick="updateimage()">
</form>

</body>