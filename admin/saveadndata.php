<?php
include 'connection.php';
$id=$_GET['hdn'];
$username=$_GET['txtusername'];
$password=$_GET['txtpassword'];
$str="update admin set username='$username',password='$password' where id=".$id;
$chk=mysql_query($str);
if($chk)
{
   header("Location:viewadnmaster.php");
}
else
{
   echo mysql_error();
}
?>
