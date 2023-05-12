

<table width="100%" height="100%" border="1">
 <tr bgcolor="#CC9966" style="color:#339999">
   <td colspan="2" valign="middle"><?php include "header.php"?>
   </td>
 </tr>
 <tr bgcolor="#339999">
   <td width="204"><?php include "left.php" ?></td>
   <td width="1039">
    <table align="center" border="0">
	  <th><font size="+3" color="#CC9966">Add Photo</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>
<html>
<head>


<title>Add New Photo</title>

</head>

<body>

<form method="post" name="f1" enctype="multipart/form-data">
	<table align="center" border="2">
		<tr align="center">
			<td colspan="2">
				<h2><b><u>Add New photo</u></b></h2>
			</td>
		</tr>
		
		
		
        <tr>
			<td>
				Image name :
			</td>
			
			<td>
				<input type="text" name="name" required="" />
			</td>
		</tr>
		
        
		
	
		
		<tr>
			<td>
			Select	Image :
			</td>
			
			<td>
				<input type="file" name="file" required="" />
			</td>
			
		</tr>
		
		<tr align="center">
			<td colspan="2">
				<input type="submit" name="submit" value="Submit" />
				<input type="reset" name="reset" value="Reset" />
			</td>
		</tr>
	</table>
</form>
        
<?
include("connection.php");
if(isset($_POST['submit']))
{
	$nm=$_POST['name'];
	$p= $_FILES['file']['name'];
	$s=$_FILES['file']['tmp_name'];
		
	$dt=date('y-m-d');
	$destination = "images/".$p;
	move_uploaded_file($s,$destination);
	
			$st="insert into  gallery values('','$nm','$destination','$dt')";				
			if(mysql_query($st))
			{
				echo "<script language='Javascript'>";
				echo "alert('Photo Added Successfully')";
				echo "</script>";
				
			}
			else
			{
				echo mysql_error();
			}
}
?>   

</body>
</html>
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