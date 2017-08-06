<!doctype html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>create new blog</title>
        <meta name="description" content="qiankaihua's personal site">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    </head>
    <body>
        <form action="api/blog/add" method="post">
            title:<input type="text" name="title"><br>
            content:<br>
            <input type="textarea" name="content" rows="100" cols="100" style="width:600px;height:800px;"><br>
            <input type="submit">
        </form>
        <footer>
          <p>Copyright &copy; 2017 Qian Kaihua </p>
        </footer>
    </body>