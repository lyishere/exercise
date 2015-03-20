<?php
/**
 * Created by PhpStorm.
 * User: Blue Mary
 * Date: 2015/3/19
 * Time: 19:46
 */
function str($str){
    $array=array("abc","abcd","abcde","abcdef","abcdefg");
    $repstr=implode($array);
    if(perg_match("/$str/",$repstr)){
        echo"<script>alert('*********************');location.herf='ex16.php'</script>";
    }else{
        echo"it is:".$str;
    }
}
if(!empty($_POST['sub'])){
    str($_POST['te']);
}


?>
<html>
<head>
    <title>过滤字符串</title>
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
            <form action="" method="post">
                <b style="float:left">内容：</b><textarea cols="15" rows="2" name="te"></textarea>
                <p><center><input type="submit" name="sub" value="提交"></center></p>
            </form>
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