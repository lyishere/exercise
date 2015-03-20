<?php
/*
 * Created by PhpStorm.
 * User: Blue Mary
 * Date: 2015/3/13
 * Time: 8:18
 */
$a=20;
$b="lyishere";
$e=$a+$b;
$f=$b+$a;
echo "auto translate:<br>";
echo '20+lyishere='.$f."<br>";
echo "force translate:<br>";
echo '20+lyishere='.(string)$e."<br>";

?>