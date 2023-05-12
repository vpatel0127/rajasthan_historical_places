<?php
session_start();
if($_SESSION['username'])
{
?>




<?php
  include 'connection.php';
  ?>

  <html>
  <head>
</head>



 <table width="100%" height="100%" border="1">
 <tr bgcolor="#CC9966" style="color:#339999">
   <td colspan="2" valign="middle"><?php include "header.php"?>
   </td>
 </tr>
 <tr bgcolor="#339999">
   <td width="204"><?php include "left.php" ?></td>
   <td width="1039">
    <table align="center" border="0">
	  <th><font size="+3" color="#CC9966">DELETE PLACE</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#cc9966">
	   <td>

<? include('connection.php');
              
			   $q=mysql_query("select * from catagery",$con);
			  ?>
              <body>
<form action="" method="post" enctype="multipart/form-data">
<table width="910" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#996633">
  <tr>
    <td><img src="images/6.png" width="1000" height="400" /></td>
  </tr>
 
  <tr>
  <td>
  <select name="cat">
		<? while($m=mysql_fetch_array($q)) { ?><option value="<? echo $m[1];?>"><? echo $m[1];?></option><?} ?></select></td>
      </tr>
  
  <tr>
  <tr>
  <td><input type="submit" name="s1" value="Submit" />
  </td>
  </tr>
    <td align="center"><?php
	$cat=$_POST['cat'];
	echo $cat;
			  
	$result = mysql_query("SELECT * FROM  img where maincat_name='".$cat."'",$con);
	echo "<table border='0'>
	";
 	while($row = mysql_fetch_array($result))
  	{
  		echo "<tr>";
  		echo "<td><img src='". $row['img_path']."' alt='Title Text' height='300' width='300'/> </td>";
		echo "<td><a href='delimg.php?id=$row[id]'><input type='button' value='Delete'></a></td>";
  		echo "</tr>";
  	}
	echo "</table>";
	mysql_close($con);
?>    </td>
  </tr>
</table>
	
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
  
</form>
 <?php
}
else
{
	echo "please login";
}
?>

