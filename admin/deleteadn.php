<?php
include 'connection.php';
?>
<?php
$id=$_GET['id'];
$str="delete from admin where id=".$id;
$chk=mysql_query($str);
if($chk)
{
  header("Location:viewadnmaster.php");
}
else
{
  echo "record not found";
}
?>
