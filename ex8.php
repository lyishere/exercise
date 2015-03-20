<?php
/**
 * Created by PhpStorm.
 * User: Blue Mary
 * Date: 2015/3/16
 * Time: 21:31
 */
echo"<form action=method='post'>";
echo "user name:<imput type='text' name='text'><br>";
echo "mi&nbsp;&nbsp;ma:<imput type='password'name type='pwd'>";
echo "<imput type='sbumit'name='sub'value='comfirm'>";
echo "</form>";
if(isset($_POST['sub'])){
    if($_POST['text']=="mr"&&$_POST['pwd']=="mrsoft"){
        echo "<script>alert('you have');</script>";
    }else{
        echo "<script>alert('you aren't);</script>";
    }
}


?>