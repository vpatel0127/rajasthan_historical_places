<?php
session_start();
if($_SESSION['username'])
{
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
	  <th><font size="+3" color="#CC9966">Place Added Successfully</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>

<?php
	include("connection.php");
	
	$name= $_FILES['file']['name'];
	$img_t = $_POST['img_title'];
	$s=$_FILES['file']['tmp_name'];
	//$size=$_FILES['file']['size'];	
	$dt=date('y-m-d');
	$mcat_nm=$_POST['pcategory'];
	$scat_nm=$_POST['subcat'];
	$short_d=$_POST['pdesc1'];
	$long_d=$_POST['pdesc2'];

	$destination = "photos/".$name;
  // echo"$img_nm";
   //echo"$img_t";
   //echo"$date";
   //echo"$mcat_nm";
   
   
   
   
	//echo $destination;

	
	move_uploaded_file($s,$destination);
	
			$st="insert into  img(img_nm,img_title,date,maincat_name,subcat_name,short_discription,long_discription,img_path) values('$img_nm','$img_t','$dt','$mcat_nm','$scat_nm','$short_d','$long_d','$destination')";
			
			
			
			
					
			if(mysql_query($st))
			{
				echo "<script language='Javascript'>";
				echo "alert('Place Added Successfully')";
				echo "</script>";
				//echo "Size".$size;
			}
			else
			{
				echo mysql_error();
			}
	

?>
			
		<?	// m$d=" delete from img " ?>
        
        


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
