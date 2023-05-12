<?php
session_start();
include 'connection.php';
$txtusername=$_POST['txtusername'];
$txtpassword=$_POST['txtpassword'];
$str="select * from login where username='$txtusername' and password='$txtpassword'";
$result=mysql_query($str);
$chk=mysql_num_rows($result);
if($chk>0)
{
   $_SESSION['username']=$txtusername;
   header("location:viewadnmaster.php");
} 
else
{
   $_SESSION['msg']="username Or Password is wrong try again...";
   header("location:index.php");
}
?>
