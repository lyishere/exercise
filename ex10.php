<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>自定义数字加密算法</title>
</head>
<body>
<?php
echo "<form action='' method='post'>";
echo "数字口令：<input name='text' type='text'>";
echo "<input type='submit' name='sub' value='确定'>";
echo "</form>";
define("PI",3.1415926);
function Encrypt($str){
    return $str = $str << PI;
}
function Decrypt($str){
    return $str = $str >> PI;
}
if($_POST['sub']){
    echo "加密口令&nbsp;&nbsp;".Encrypt($_POST['text'])."<br>";
    $_SESSION['pwd'] = Encrypt($_POST['text']);
    ?>
    <a href='index.php?pwd=1'>解密口令</a>
<?php
}
if(isset($_GET['pwd'])){
    echo "解密口令&nbsp;&nbsp;".Decrypt($_SESSION['pwd']);
}
?>
</body>
</html>