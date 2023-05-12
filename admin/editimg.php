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
	  <th><font size="+3" color="#CC9966">Edit Photo</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#cc9966">
	   <td>
 
 
 <?php
   include("connection.php");
   $id=$_GET['Id'];
   $getImage = mysql_query("select * from img where id = $id");
   if($getImage)
   	{
	$row = mysql_fetch_array($getImage);
	}
	else
	{
		echo  "Selected Data Not Founded";
		}
   if(isset($_POST['btnUpdate']))
   {
   		$img=$_FILES['images']['name'];
		move_uploaded_file($_FILES['images']['name'],'photos/'.$img);
		$path='photos/'.$img;
		$q=mysql_query("UPDATE img SET img_path='$path' WHERE id= '$id'",$con);
		if($q)
		{
			echo "<script>alert('uploading SuccessFully')</script>";
		}
		else
		{
			echo mysql_error();
		}
		
 }
 ?>
 
 <tr>
	<td align="center">
    <p>&nbsp;</p>
    	<form method="post" enctype="multipart/form-data">
        <table width="384" border="0" cellpadding="0">
        <tr>
        <td align="left" valign="top">&nbsp;&nbsp;Images:-</td>
        <td align="left" valign="top"><img src="<? echo $row['img_path']; ?>" height="100" width="100"/><input type="file" name="images"></td>
        </tr>
        <tr>
        <td><input type="submit" name="btnUpdate" value='Update'>
        <td><input type="reset" name="btnCancel" value='CANCEL'></td></tr>
       
        
        </table>
          <a href="editimages.php">BACK</a>
       	
	
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
   <?php
}
else
{
	echo "please login";
}
?>

 