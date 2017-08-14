<html>
<!doctype html>

    <head>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>post new image</title>
        <meta name="description" content="qiankaihua's personal site">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    </head>
    <body>
    <script>

    function addimg()
    {
        document.getElementById("add").submit();
    }
    </script>
        <form action="api/image/add" id="add" enctype="multipart/form-data" method="post">
            选择照片：<input id="file" type="file" name="file"/>
            简介：<input type="text" name="intro" id="nonestyle"><br>

            <input type="button" value="提交" onclick="addimg()">
        </form>
        <footer>
          <p>Copyright &copy; 2017 Qian Kaihua </p>
        </footer>
    </body>
</html>