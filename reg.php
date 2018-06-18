
<?php
$con = mysqli_connect("localhost","root","123");
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db( $con,"mypage"); 

$retval = mysqli_query($con,"INSERT INTO users(name,pwd) VALUES('$name','$pwd')");
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($con));
}
echo "您的姓名号是：".$_POST["name"]."<br/>";
echo "您的密码是：".$_POST["pwd"]."<br/>";
mysqli_close($con); 
?>