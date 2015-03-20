<?php
/**
 * Created by PhpStorm.
 * User: Blue Mary
 * Date: 2015/3/16
 * Time: 11:09
 */
                  //比较2个时间戳的大小
date_default_timezone_set("Asia/ShangHai");
$a=strtotime("now");
$b=strtotime("11 May 2011");
echo $a."\n";
echo "time output:".date("Y-m-d H-i-s",$a)."<br><br>";
echo $b."\n";
echo "timr output:".date("Y-m-d H-i-s",$b)."<br><br>";
$c=ceil(($a-$b)/(3600*24));
echo "距2011年5月11号已过去".$c."天";
?>