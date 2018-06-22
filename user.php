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
     <?php 
    session_start();
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        $con = mysqli_connect("localhost", "root", "123");
        $sql = "SELECT * FROM users where name = '$name'";
        mysqli_query($con, "set names utf8");
        mysqli_select_db($con, "mypage");
        $retval = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
    }

    ?>   
</head>

<body>
    <div id="header">
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
                    <li class="selected">
                        <a  href="user.php"><?php echo $_SESSION['name'];?></a>
                    </li>
                </ul>
            </div>
            
           
            
            
        </div>
    </div>
    <div style="height:400px; border-radius: 15px;">
    <?php if($row['author']==0)
                    echo "<iframe src='./general_user.php' id='barframe' frameborder='0' width='100%' height='100%'  border-radius: 15px;></iframe>" ;
                  else
                     echo "<iframe src='./admin.php' id='barframe' frameborder='0' width='100%' height='100%'  border-radius: 15px;></iframe>";
                     ?> 
            </div>

    <div id="footer">CopyRight@Richado,2018 </div>
</body>

</html>