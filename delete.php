<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>删除用户</title>
    <link href="css/nav_bar.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container">
        <div class="row">
            <form class="form-login" action="login.php" method="post">
            <p style="text-align:center;padding-top:50px;font-size:200%;">
            <?php     
                      session_start();
                      $con = mysqli_connect("localhost","root","123");
                      $name=$_POST['name'];
                      if (!$con)
                        {
                        die('Could not connect: ' . mysql_error());
                        } 
                      mysqli_query($con , "set names utf8");
                      mysqli_select_db( $con,"mypage"); 
                    //   $sql = "SELECT * FROM users where name = '$name'";
                      $sql = "DELETE FROM users WHERE name ='$name'";
                      $retval = mysqli_query($con,$sql);
                      if(! $retval )
                      {
                          die('删除用户: ' . mysqli_error($con));
                      }
                        
        
                      mysqli_close($con); 
                      ?>
            </p>
 
                <button   id="btn-reg" style="width:100px;margin-left:127px;"><a href="admin.php    ">返回首页</a></button>
            </form>
        </div>
    </div>

</body>

</html>
