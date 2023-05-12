<?php
include 'connection.php';
$id=$_GET['txtid'];
$username=$_GET['txtusername'];
$password=$_GET['txtpassword'];
$str="insert into admin(id,username,password) values('".$id."','".$username."','".$password."')";
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
