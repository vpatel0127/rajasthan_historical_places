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
  <title>Add New Place</title>



  <script language="javascript">
  function msgConfirm()
  {
    return confirm("are you sure delete this product?...");
  }
  </script>
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
	  <th><font size="+3" color="#CC9966">Add Place</font></th>
	  <tr><td>&nbsp;</td></tr>
	  <tr bgcolor="#CC9966">
	   <td>




<body>

<form action="addplace1.php" method="post" name="f1" enctype="multipart/form-data">
	<table align="center" border="2">
		<tr align="center">
			<td colspan="2">
				<h2><b><u>Add New place</u></b></h2>
			</td>
		</tr>
		
		
		
        <tr>
			<td>
				Image Title :
			</td>
			
			<td>
				<input type="text" name="img_title" required="" />
			</td>
		</tr>
		<tr>
			<td>
			Main	Category :
			</td>
			
           
			<td>
            <select name="pcategory" id="s" >
            
					<option value="Location">Location</option>
					<option value="HistoricalPlaces">HistoricalPlaces</option>
					<option value="Museum">Museum</option>
				</select>
				
			</td>
			
		</tr>
     <tr>
			<td>
				Sub Category :
			</td>
			   
			<td>
          
         <select name="subcat">
         <optgroup label="Location">
            <option value="Jaipur">Jaipur</option>
            <option value="Udaipur">Udaipur</option>
              <option value="Kota">Kota</option>
            <option value="Bikaner">Bikaner</option>  
            <option value="Jodhpur">Jodhpur</option>
            <option value="Ajmer">Ajmer</option>  
              <option value="Pushkar">Pushkar</option>
            <option value="Jaisalmair">Jaisalmair</option>
            <option value="Alwer">Alwer</option>
            <option value="Swai Madhopur">Swai Madhopur</option>
            </optgroup>
			
            
             <optgroup label="HistoricalPlaces">
            <option value="Amer Fort">Amer Fort</option>
            <option value="City Palace">City Palace</option>  
            <option value=" Jaigarth Fort"> Jaigarth Fort</option>
            <option value="Naharagarth Fort">Naharagarth Fort</option> 
             <option value="Maheram Fort">Maheram Fort</option>
            <option value="Kumbhalgarth For">Kumbhalgarth Fort</option>  
            <option value="Chittorgarth Fort">Chittorgarth Fort</option>
            <option value="Junagarth Fort">Junagarth Fort</option>  
            <option value="Jaisalmair Fort">Jaisalmair Fort</option>
            <option value="Umaid Bhawan Palace">Umaid Bhawan Palace</option>
            </optgroup>
                
            
             <optgroup label="Museum">
            <option value="Pillani Birla Museum">Pillani Birla Museum</option>
            <option value="Ajmer Goverment Museum">Ajmer Goverment Museum</option>  
            <option value="Alwer Goverment Museum">Alwer Goverment Museum</option>
            <option value="Amer Archaeological Museum">Amer Archaeological Museum</option> 
             <option value="Bairat Virat Nager Museum">Bairat Virat Nager Museum</option>
            <option value="City Palace Museum">City Palace Museum</option>  
            <option value="Bhartiya Lok Kala Museum">Bhartiya Lok Kala Museum</option>
            <option value="Ganga Golden Jabilee Museum">Ganga Golden Jabilee Museum</option>  
            <option value="Albert Hall Museum">Albert Hall Museum</option>
            <option value="Dungarpur Museum">Dungarpur Museum</option>
             </optgroup>
				</select>
                
                
			</td>
			
		</tr>
		
		<tr>
			<td>
			Short Description :
			</td>
			
			<td>
				<textarea name="pdesc1" rows="8" cols="20" >
				</textarea>
			</td>
		</tr>
        
        <tr>
			<td>
			Long Description :
			</td>
			
			<td>
				<textarea name="pdesc2" rows="8" cols="20"  >
				</textarea>
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
</html>
	
 <?php
}
else
{
	echo "please login";
}
?>
