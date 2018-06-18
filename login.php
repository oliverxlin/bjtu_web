<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
    <link href="css/nav_bar.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
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
                        <a href="index.html">个人介绍</a>
                    </li>
                    <li>
                        <a href="index.html">科研世界</a>
                    </li>
                    <li>
                        <a href="index.html">个人简历</a>
                    </li>
                    <li class="selected">
                        <a href="login.html">登陆</a>
                    </li>
                    <li>
                        <a href="reg.html">注册</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="form-login" action="login.php" method="post">
            <p style="text-align:center;padding-top:50px;font-size:200%;">
            <?php
                      $con = mysqli_connect("localhost","root","123");
                      $name=$_POST['name'];
                      $pwd=$_POST['pwd'];

                      if (!$con)
                        {
                        die('Could not connect: ' . mysql_error());
                        } 
                      mysqli_query($con , "set names utf8");
                      mysqli_select_db( $con,"mypage"); 

                      $sql = "SELECT * FROM users where name = '$name'";

                      $retval = mysqli_query($con,$sql);
                      if(! $retval )
                      {
                          die('无法读取数据: ' . mysqli_error($con));
                      }
                        
                      $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
                      if($row['name']==""){ 
                        echo "<p style="."text-align:center".">没有该用户</p>";

                      }
                      else if($pwd !=$row['pwd'] )
                      {
                        echo "<p style="."text-align:center".">密码不正确</p>";
                      }
                      else{
                        echo "登陆成功";
                        #header("Location: welcome.html?name=".$name."&pwd=".$pwd);
                        Session_Start();  
                      $_SESSION["name"]=$_POST["name"];   
                      }

                      mysqli_close($con); 
                      ?>
            </p>
 
                <button type="submit"  id="btn-reg" style="width:100px;margin-left:127px;"><a href="index.html">返回首页</a></button>
                <button type="submit"  id="btn-reg" style="width:100px;margin-left:127px;"><a href="welcome.php">填写简历信息    </a></button>
            </form>
        </div>
    </div>

</body>

</html>
