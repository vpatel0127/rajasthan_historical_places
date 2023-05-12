<?php
session_start();
if($_SESSION['username'])
{
?>
<?php
include 'connection.php';
?>
<table width="100%" height="100%" border="1">
 <tr bgcolor="#CC9966" style="color:#339999">
   <td colspan="2" valign="middle"><?php include "header.php"?>
   </td>
 </tr>
 <tr bgcolor="#339999">
   <td width="204"><?php include "left.php" ?></td>
   <td width="1039">
    <table align="center" border="0">
	  <th><font size="+3" color="#CC9966">Edit Admin</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>

	<?php
      $id=$_GET['id'];
      $str="select * from admin where id=".$id;
      $result=mysql_query($str);
      $row=mysql_fetch_array($result,$con);
    ?>
<html><head></head><body>
<form name="f1" method="get" action="saveadndata.php">
<table border="1" align="center">
<tr bgcolor="#CC9966"><th><font size="+2">UserName</font></th>
  <td><input type="text" name="txtusername" value='<?php echo $row[1];?>'/></td></tr>
<tr bgcolor="#CC9966"><th><font size="+2">Password</font></th>
  <td><input type="password" name="txtpassword" value='<?php echo $row[2];?>'/></td></tr>
<tr bgcolor="#CC9966"><td colspan="2" align="center">
<input type="hidden" name="hdn" value="<?php echo $id;?>"/>
<input type="submit" value="update" name="submit"/></td></tr>
</table></form></body></html>
	</td>
		
</td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr bgcolor="#CC9966" style="color:#339999">
    <td colspan="2"><?php include "footer.php"?>
	</td>
  </tr>
  
   <?php
}
else
{
	echo "please login";
}
?>