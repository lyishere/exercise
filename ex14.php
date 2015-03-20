<?php
/**
 * Created by PhpStorm.
 * User: Blue Mary
 * Date: 2015/3/19
 * Time: 18:29
  */
                     //前置自运算符和后置自运算符的区别
$a=0;
echo'-------houzhijiayunsuan------';
for($b=0;$b<=10;$b++){
    echo $a++;
}
echo"<br>--------qianzhijiayunsuan-------<br>";
$d=0;
for($b=0;$b<=10;$b++){
    echo ++$d;
}
echo"<br>---------qianzhijianyunsuan--------------<br>";
$f=10;
for($b=0;$b<=10;$b++){
    echo --$f." ";
}
echo"<br>---------houzhijianyunsuan----------------<br>";
$f=10;
for($b=0;$b<=10;$b++){
    echo $f--."&nbsp";
}
?>