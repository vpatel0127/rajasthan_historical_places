<?php
include 'connection.php';
?>
<?php
$FeedbackId=$_GET['FeedbackId'];
$str="delete from feedback where FeedbackId=".$FeedbackId;
$chk=mysql_query($str);
if($chk)
{
  header("Location:viewfdkmaster.php");
}
else
{
  echo "record not found";
}
?>
