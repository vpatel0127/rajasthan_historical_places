
<?php
/*session_start();if($_SESSION['username'])
{*/
?>



  <html>
  <head><title>Delete</title>
</head>

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
	  <th><font size="+3" color="#CC9966">Delete Photo</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#cc9966">
	   <td></td></tr> <!-- <tr>
    <td align="center"><a href="admin_images.php" class="menu">Images</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin_events.php" class="menu"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin_tickets.php" class="menu"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin_suggestions.php" class="menu">Suggestions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php"><font size="+2" color="#FFFFFF">Logout</font></a>
  </tr>-->
  <tr>
    <td align="center">
	<?php
	include("connection.php");
	$id = $_GET['id'];
	
	
	mysql_query("DELETE FROM img WHERE id='$id'",$con);
	echo "Delete.............";
	mysql_close($con);
?>
<a href="view.php">Back</a>	 
</td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr bgcolor="#CC9966" style="color:#339999">
    <td colspan="2"><?php include "footer.php"?>
	</td>
  </tr>
  </table>
  </body>
  </html>
 
   <?php
/*}
else
{
	echo "please login";
}*/
?>