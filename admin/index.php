<?php
error_reporting(0);
session_start();
?>

<?php  include "connection.php";?>
<html><head></head>
<body bgcolor="#000033">
<form name="f1" method="post" action="chklogin.php">
<table width="100%" height="100%">
 <tr><td valign="middle" align="center">
  <table width="100%" height="100%" border="1">
    <tr style="font-size:18px">
 	 <td align="center" style="color:#CC9966" colspan="2" >
     
 <tr bgcolor="#CC9966" style="color:#339999">
   <td colspan="2" valign="middle"><?php include "header.php"?>
   </td>
 </tr>
 <tr bgcolor="#339999">
   
   <td width="1039">
<table width="100%" height="100%">
 <tr><td valign="middle" align="center">
   <table border="1" bgcolor="#CD853F">
    <tr style="font-size:18px">
 	 <td align="center" style="color:#006" colspan="2" >
	  <?php
	  
		echo $_SESSION['msg'];
		$_SESSION['msg']="";
	 
	  ?>
<h1> Admin Login </h1>

	  </td></tr>	
    <tr><th><font size="+2">User Name:</font></th>
        <td><input type="text" name="txtusername" required="" ></td></tr>
    <tr><th><font size="+2">PassWord:</font></th>
        <td><input type="password" name="txtpassword" required="" ></td></tr>
    <tr><td colspan="2" align="center">
	   <input type="submit" value="Submit" name="submit"/>
       <input name="reset" type="reset" value="Reset"/></td>
   </tr></table>
  </td></tr></table>
  </td>
  </tr>
  <tr bgcolor="#CC9966" style="color:#339999">
    <td colspan="2"><?php include "footer.php"?>
	</td>
  </tr></tr>
  <?php
  session_destroy();
  ?>
  
  
   