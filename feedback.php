
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function chk()
{	
	txtname=document.f1.txtname.value;
	txtphone=document.f1.txtphone.value ;
	txtemail=document.f1.txtemail.value;
	txtsuggestion=document.f1.txtsuggestion.value;
	if(txtname=='' || txtphone=='' || txtemail=='' || txtsuggestion=='')
	{
		alert('Please enter all data...!');
	}
	else
	{
		f1.submit();
		alert('Successfully inserted...!');

		}	
}
function test()
{
	var s=document.f1.txtphone.value;
	if(!(/^\d{10}$/.test(s)))
	{
		alert("Invalid contact...!");
		document.f1.txtphone.value="";
	}
}
function test1()
{
	var e=document.f1.txtemail.value;
	if(!(/\S+@\w[gmail|yahoo]+\.\S[com|in]+/.test(e)))
	{
		alert("Invalid email...!");
		document.f1.txtemail.value="";
	}
}

</script>

<style>
	
	
		#article1
		{
			text-align:justify;
			
		
		}
		#article2{
			text-align:justify;
			
		}
	</style>



<?php include("h1.php"); ?>
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3l-contact-heading">
				<h2>Your Review</h2>
				
			</div>
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="contact-form-top">
						<h3>Address</h3>
						<p>SARVODAYA COLLEGE OF COMPUTER SCIENCE<br>P.D.M. college Campus<br> Gondal Road<br> RAJKOT.</p>
					</div>
					<div class="contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>(0281)2366537</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:example@email.com">
                           jsankhavara@gmail.com
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           vaibhaviraiyani@gamil.com
                            </a></span></li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Send us a message</h3>
					</div>
	   <center>
	   <form name="f1" method="get" action="#">
		<table width="383" align="center" bgcolor="pink">
        
     
	 <tr>
      <Td height="24"><b></b></td>
	  </tr>
        	
      <tr>
      <td width="300" valign="top"><input type=text name=txtname size=50 required=""  placeholder="Name"></td>
      </tr>
	   <tr>
      <Td height="24"><b></b></td>
	  </tr>
      
      <Tr>
     <td valign="top"><input type=text name=txtemail size=50 onchange="test1()" required="" placeholder="E-mail"></td>
      </tr>
	   <tr>
      <Td height="24"><b></b></td>
	  </tr>
      <Tr>
     <td valign="top"><input type=text name=txtphone size=50 length=10 onchange="test()" required="" placeholder="Phone"></td>
      </tr>
	   <tr>
      <Td height="24"><b></b></td>
	  </tr>
	  <tr>
      <Td valign="top"><textarea cols=50 rows=5 name=txtsuggestion id=t7 required="" placeholder="Suggestion"></textarea></td>
      </tr>
      </table>

      <tr>
      <td height="26"></td>
      <td valign="top">
	  <input type=submit onclick="chk()" name=sub value='SUBMIT'>
        <input type=reset name=res value='CANCEL'>
        
		</td>      
      </tr>
		</form>
		<font color="#FFFFFF">
		<?php
error_reporting(0);


session_start();
include 'connection.php';
$FeedbackId=$_POST['txtFeedbackId'];
$name=$_GET['txtname'];
$email=$_GET['txtemail'];
$phone=$_GET['txtphone'];
$suggestion=$_GET['txtsuggestion'];
$str="insert into feedback(FeedbackId,name,email,phone,suggestion) values('".$FeedbackId."','".$name."','".$email."','".$phone."','".$suggestion."')";
$chk=mysql_query($str);
echo $chk;
if($chk)
{
 	//echo "Successfully inserted";
   //header("Location:viewfdkmaster.php");
} 
else
{
   echo mysql_error();
}


?>
</font>

		</center>
		</body>
		       
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
	<!-- //contact -->
	<?php include("footer.php"); ?>
</body>	

		</div>
		<div class="clear"></div>	
	</div>
</div>
</div>
</div>
</body>
</html>