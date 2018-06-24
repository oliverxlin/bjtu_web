<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <link href="css/nav_bar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

</head>

<body>
    <?php
    session_start();
    header('Content-type:text/html;charset=utf-8');
    if(isset($_SESSION['name'])){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie(session_name(),'',time()-3600);//销毁与客户端的卡号
            header('./index.html');
        }else{
            header('location:skip.php?url=index.php&info=注销失败，请稍后重试！');
        }
    $a = isset($_SESSION['name']);
?>
<script> var a = "<?php echo '$a' ?>"
        if(a){
            alert("登出成功");
            location.href = 'user.html';
        }
        </script>
    <!-- <div id="footer">CopyRight@Richado,2018 </div> -->
</body>

</html>
