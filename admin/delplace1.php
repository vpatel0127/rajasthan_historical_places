

<table width="100%" height="100%" border="1">
 <tr bgcolor="#CC9966" style="color:#339999">
   <td colspan="2" valign="middle"><?php include "header.php"?>
   </td>
 </tr>
 <tr bgcolor="#339999">
   <td width="204"><?php include "left.php" ?></td>
   <td width="1039">
    <table align="center" border="0">
	  <th><font size="+3" color="#CC9966">place deleted</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>

	   <?php
include 'connection.php';
?>
<?php
$id=$_GET['id'];
$d="delete from img where id=".$id;
$chk=mysql_query($d);
if($chk)
{
		echo "<script language='Javascript'>";
		echo "alert('record deleted Successfully')";
		echo "</script>";
     
}
else
{
   		echo "<script language='Javascript'>";
		echo "alert('record not found')";
		echo "</script>";
}
?>
   
		
</td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr bgcolor="#CC9966" style="color:#339999">
    <td colspan="2"><?php include "footer.php"?>
	</td>
  </tr>