<?php
session_start();
if($_SESSION['username'])
{
?>

<html>
<body>
<script language="javascript">
  function msgConfirm()
  {
    return confirm("are you sure delete this product?");
  }
</script>
<table width="100%" height="100%" border="1">
 <tr bgcolor="#CC9966" style="color:#339999">
   <td colspan="2" valign="middle"><?php include "header.php"?>
   </td>
 </tr>
 <tr bgcolor="#339999">
   <td width="204"><?php include "left.php" ?></td>
   <td width="1039">
    <table align="center" border="0">
	  <th><font size="+3" color="#CC9966">FeedBack</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>
	   <?php
  include "connection.php"
?>
	    <?php
         $result=mysql_query("SELECT * FROM feedback");
         echo "<table border='1'>";
         echo "<tr bgcolor='#CC9966'>";
	       echo"<th><font size='+1'>FeedbackId</font></th>";
		   echo"<th><font size='+1'>name</font></th>";
		  echo"<th><font size='+1'>email</font></th>";
		   echo"<th><font size='+1'>phone</font></th>";
	       echo"<th><font size='+1'>suggestion</font></th>";
	       echo"<th><font size='+1'>delete</font></th>";
         echo "</tr>";
   while($row=mysql_fetch_array($result,MYSQL_BOTH))
   {
   echo"<tr>";
     echo"<td>".$row['FeedbackId']."</td>";
     echo"<td>".$row['name']."</td>";
     echo"<td>".$row['email']."</td>";
	   echo"<td>".$row['phone']."</td>";
     echo"<td>".$row['suggestion']."</td>";	 
    
     echo"<td>"."<a href='deletefdk.php?FeedbackId=".$row['FeedbackId']."'onClick='return msgConfirm();'>delete</a>"."</td>";
   echo"</tr>";
   }
  echo "</table>";
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
</table>
</body>
</html>
<?php
}
else
{
	echo "please login";
}
?>
