<?php
	$con=mysql_connect("localhost","root","");
	if($con)
	{
	$db=mysql_select_db("project",$con);
		if(!$db)
		{
		echo "No DataBase Connected".mysql_error();
	
		}
		
	}
	else
	echo "Not connected".mysql_error();
	
	
	
?>
