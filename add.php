<?php include ("connect.php");

$nm =$_POST['nm'];
$i_p =$_POST['img_path'];
$i_t =$_POST['img_path'];
$date =$_POST['date'];
$status =$_POST['status'];
$i_c =$_POST['img_counter'];
$m_nm =$_POST['maincat_name'];
$s_nm =$_POST['subcat_name'];



$fnm=$_FILES['file']['name'];
$s=$_FILES['file']['temp_name'];
$destination="images/",$nm;
move.upload file ($s,$d);
$date=date('y-m-d');
$q="insert into img  values('','$nm','$i_p','$i_t','$date','$status','$i_c','$m_nm','$s_nm');"
$res=mysql_query($q);
if($res)
{
	success;
}
else
{
	mysql_error();
	
}

 ?>
