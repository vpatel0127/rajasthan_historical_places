<?php
session_start();
if($_SESSION['username'])
{
?>

<?php
include 'connection.php';
?>

<head></head>
<body>
<table width="100%" height="100%" border="1">
 <tr bgcolor="#CC9966" style="color:#339999">
   <td colspan="2" valign="middle"><?php include "header.php"?>
   </td>
 </tr>
 <tr bgcolor="#339999">
   <td width="204"><?php include "left.php" ?></td>
   <td width="1039">
    <table align="center" border="0">
	  <th><font size="+3" color="#CC9966">Insert Admin</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>

   <?php
    $result=mysql_query("SELECT * FROM admin");
   ?>


<form name="f1" method="get" action="saveadn.php">
<table border="1" align="center">
  <tr bgcolor="#CC9966">
 <!-- <tr><th><font size="+1">adminid</font></th>
   <td><input type="text" name="txtadminid"></td></tr> -->
    <th><font size="+2">UserName</font></th>
    <td><input type="text" name="txtusername" required=""></td>
  </tr>
  <tr bgcolor="#CC9966"><th><font size="+2">Password</font></th>
    <td><input type="password" name="txtpassword" required="" ></td></tr>
  <tr bgcolor="#CC9966"><td colspan="2" align="center">
      <input type="submit" value="save" name="submit"/>
      <input type="reset" value="Reset"/></td></tr>
</table></form>
</td></tr>	</td>
	
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
