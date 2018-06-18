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
  header("Location: welcome.html?name=".$name."&pwd=".$pwd);
}
mysqli_close($con); 
?>。