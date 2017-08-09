<!doctype html>

    <head>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>create new blog</title>
        <meta name="description" content="qiankaihua's personal site">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<script type="text/javascript" src="/editor.md-master/editormd.min.js"></script>
<link rel="stylesheet" href="/editor.md-master/css/editormd.css" />
<script src="/editor.md-master/editormd.js"></script>
<script type="text/javascript">
//    调用编辑器
var testEditor;
$(function() {
    testEditor = editormd("content", {
        width   : "1000px",
        height  : 640,
        syncScrolling : "full",
        path    : "/editor.md-master/lib/",
        previewTheme : "dark",
        saveHTMLToTextarea : true,
        name : 'content',

        emoji: true,//emoji表情，默认关闭
        taskList: true,
        tocm: true, // Using [TOCM]
        tex: true,// 开启科学公式TeX语言支持，默认关闭

        flowChart: true,//开启流程图支持，默认关闭
        sequenceDiagram: true,//开启时序/序列图支持，默认关闭,

        dialogLockScreen : false,//设置弹出层对话框不锁屏，全局通用，默认为true
        dialogShowMask : false,//设置弹出层对话框显示透明遮罩层，全局通用，默认为true
        dialogDraggable : false,//设置弹出层对话框不可拖动，全局通用，默认为true
        dialogMaskOpacity : 0.4, //设置透明遮罩层的透明度，全局通用，默认值为0.1
        dialogMaskBgColor : "#000",//设置透明遮罩层的背景颜色，全局通用，默认为#fff

        codeFold: true,


        imageUpload : true,
        imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
        imageUploadURL : "{{ url('api/uploadimage') }}",
    });
});
</script>
    </head>
    <body>
    <script>

    function addblog()
    {
        document.getElementById("add").submit();
    }
    </script>
        <form action="api/blog/add" id="add" method="post">
            title:<input type="text" name="title" id="nonestyle"><br>
            content:<br>
            <!--编辑器-->
            <div id="content">
                <textarea name="content" style="display:none;" id="ts"></textarea>
            </div>

            <input type="button" value="提交" onclick="addblog()">
        </form>
        <footer>
          <p>Copyright &copy; 2017 Qian Kaihua </p>
        </footer>
    </body>