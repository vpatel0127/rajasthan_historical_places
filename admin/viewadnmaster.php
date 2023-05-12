<?php
session_start();
if($_SESSION['username'])
{
?>






<html>
  <head></head>
  <body>
  <script language="javascript">
  function msgConfirm()
  {
    return confirm("are you sure delete this product?...");
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
	  <th><font size="+3" color="#CC9966">ADMIN</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>
	   <?php
  include 'connection.php';
  ?>



	    <?php
  $result=mysql_query("SELECT * FROM admin");
  echo "<table border='1'>";
  echo "<tr bgcolor='#CC9966'>";
	 echo"<th><font size='+1'>adminid</font></th>";
	 echo"<th><font size='+1'>username</font></th>";
	 
	 echo"<th><font size='+1'>password</font></th>";
	 echo"<th><font size='+1'>Edit</font></th>";
	 echo"<th><font size='+1'>Delete</font></th>";
  echo "</tr>";
  while($row=mysql_fetch_array($result,MYSQL_BOTH))
  {
  echo"<tr>";
    echo"<td>".$row['id']."</td>";
    echo"<td>".$row['username']."</td>";
    echo"<td>".$row['password']."</td>";
   
    echo"<td>"."<a href='editadn.php?id=".$row['id']."'>edit</a>"."</td>";
    echo"<td>"."<a href='deleteadn.php?id=".$row['id']."'onClick='return msgConfirm();'>Delete</a>"."</td>";
  echo"</tr>";
  }
  echo "<tr>";
	 echo"<td>"."<a href='insertadn.php'>Insert</a>"."</td>";
  echo "</tr>";
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
