<head>
    <style type="text/css">
        *{ font-size:12px; margin:0; padding:0;}
        input{border:1ps solid #CCCCCC; background:#FFFFCC;}
        textarea{border:1ps solid #CCCCCC; background:#FFFFCC;}
    </style>
</head>
<html>
<body style="font-size:16px; color:blue; font-family:'微软雅黑'">
<div style="width:580px; height:440px; background:url(image/1.jpg)">
    <div style=" margin:130px 20px 20px 130px; width:330px; height:220px;">
        <form action='' method='post'>
            标题：<input type='text' name='text'><br>
            内容：<textarea name='te' cols='20' rows='3'></textarea>
            <select name="check">
                <option value='谢谢您'>谢谢您</option>
                <option value='您好'>您好</option>
                <option value='再见'>再见</option>
            </select><br>

            <p>&nbsp;</p>
            <input type='submit' name='sub' value='确定'>
            <input type='reset' name='res' value='重置'>

        </form>
        <p><center>
            <div style="margin:20px auto;">
                <?php
                function str($str){								//自定义函数。
                    $str = preg_replace("/ /","&nbsp;",$str);			//替换空格。
                    $str = preg_replace("/cha(13)/","<br>",$str);		//替换回车符。
                    echo "内容：".$str;							//输出。
                }
                if(!empty($_POST["sub"])){								//通过post方式传参。
                    //如果text为空或者文本域和下拉列表框同时为空。
                    if($_POST["text"] == "" || (($_POST["te"] == "") && ($_POST["check"] == 1))){
                        echo "<script>alert('内容不能为空');location.href='index.php'</script>";		//输出提示。
                    }else{

                        if(!empty($_POST["check"]) || $_POST["select"] != '1'){				//当下拉列表值不等于1时
                            echo "<br>标题：".$_POST["text"]."<br>";	//输出内容和下拉列表内容。
                            str($_POST["te"].$_POST["check"]);
                        }else{
                            echo "标题：".$_POST["text"]."<br>";	//否则只输出文本域内容。
                            str($_POST["te"]);
                        }

                    }
                }
                ?>
            </div>
        </center>
    </div>
</div>
</body>
</html>
