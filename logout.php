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
    <!-- <div id="header">
        <div class="header_content">

            <div class="logo">
                <a href="index.html">Richado's</a>
                <span>| A wonderful personal blog.</span>
            </div>

             <div class="menu">
                <ul>
                    <li>
                        <a href="index.html">主页</a>
                    </li>
                    <li>
                        <a href="intro.html">个人介绍</a>
                    </li>
                    <li>
                        <a href="tech.html">科研世界</a>
                    </li>
                    <li >
                        <a href="welcome.php">个人简历</a>
                    </li>
                    <li >
                        <a  href="login.html">登陆</a>
                    </li>
                 
                    <li>
                        <a  href="reg.html">注册</a>
                    </li>
                    <li>
                            <a href="user.php">用户中心</a>
                        </li>
                </ul>
            </div>



        </div>
    </div> -->
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
?>

    <!-- <div id="footer">CopyRight@Richado,2018 </div> -->
</body>

</html>
