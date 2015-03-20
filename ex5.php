<?php
/**
 * Created by PhpStorm.
 * User: Blue Mary
 * Date: 2015/3/14
 * Time: 17:23
 */
                  //通过PHP5新型字符串动态输出Javascript代码
$str=<<<mark;
<script language="javascript" type="text/javascript">alert("welcome to the code world!!!");
</script>
mark;
echo $str;
?>