<?php
session_start();
?>
<html>
<head>
    <title>获取文件后缀</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <style type="text/css">
        *{font-size:12px;}
    </style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (login.jpg) -->
<table id="__01" width="400" height="234" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="3"><img src="images/login_01.gif" width="400" height="55" alt=""></td>
    </tr>
    <tr>
        <td>
            <img src="images/login_02.gif" width="46" height="112" alt=""></td>
        <td width="197" height="112">
            <form action ="" method="post">
                上传文件：<input type="file" name="text">
                <center><input type="submit" name="sub" value ="上传"></center>
            </form>

            <center>
                <?php
                if(!empty($_POST["sub"])){
                    $a = strtoupper($_POST["text"]);
                    echo "文件名称自动转换为大写：".$a."<br>";
                    $b = strtolower($_POST["text"]);
                    echo "文件名称自动转换为小写：".$b;
                }
                ?>
            </center>
        </td>
        <td>
            <img src="images/login_04.jpg" width="157" height="112" alt=""></td>
    </tr>
    <tr>
        <td colspan="3">
            <img src="images/login_05.gif" width="400" height="67" alt=""></td>
    </tr>
</table>
</body>
</html>
