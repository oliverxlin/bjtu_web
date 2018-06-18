<?php

$con = mysqli_connect("localhost","root","123");
session_start();
$year = $_POST['year'];
$name = $_SESSION["name"];

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db( $con,"mypage"); 
$retval =   mysqli_query($con,"UPDATE users SET year = $year WHERE name = '$name' ");
// $retval = mysqli_query($con,"INSERT INTO users(name,pwd) VALUES('$name','$pwd')");
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($con));
}

mysqli_close($con); 
?>