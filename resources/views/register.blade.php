<!DOCTYPE html>
<html class="no-js" lang="zh-CN">
<head>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <script type='text/javascript' src="/js/all.js"></script>
    <link rel="stylesheet" href="/css/templatemo-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css"-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Register</title>
</head>
<body style="background-color: #afafaf">

<div>
    <div style="background-color: #dfdfdf; height: 500px;text-align:center;width:100%;margin: 20px; ">
        <form id="register" action="api/register" method="post">
            <input type="text" name="username" placeholder="用户名" autofocus required style="margin:20px;"><br>
            <input type="password" name="password" placeholder="密码" required style="margin:20px;"><br>
            <input type="text" name="email" placeholder="e-mail" required style="margin:20px;"><br>
            <input type="text" name="realname" placeholder="真实姓名" required style="margin:20px;"><br>
            <input type="radio" name="gender" value=true required style="margin:20px;">男
            <input type="radio" name="gender" value=false required style="margin:20px;">女<br>
            <input type="submit" name="submit" value="注册" style="margin:20px;">
        </form>
    </div>
    <a href="/">返回首页</a>
</div>
    <footer>
      <p>Copyright &copy; 2017 Qian Kaihua </p>
    </footer>
</body>
</html>
