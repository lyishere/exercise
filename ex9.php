<?php
/**
 * Created by PhpStorm.
 * User: Blue Mary
 * Date: 2015/3/18
 * Time: 21:26
 */
if($_POST[sub]){
    for($a=2000;$a<=2020;$a++){
        if($a%4==0){
            echo $a."$nbsp&nbsp";
        }
    }
}

?>