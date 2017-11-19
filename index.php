<?php
include("sendmail.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sending Emails</title>
<style>
.email
{
	width:360px;
	margin: 50px auto;
	font-family: cambria,"Hoefler Text","Liberation serif",Times,"Times New Roman",serif;
	color:#006;
	border-radius:10px;
	border: 2px solid #000;
	margin-top:70px;
	padding:10px 40px 25px;
}
input[type=text]
{
	width:99%;
	padding:10px;
	margin-top:8px;
	border:1px solid #cc;
	padding-left:5px;
	font-size:16px;
	font-family:cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
}
input[type=textarea]
{
	width:99%;
	padding:10px;
	margin-top:8px;
	border:1px solid #cc;
	padding-left:5px;
	font-size:16px;
	font-family:cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
}
input[type=submit]
{
	width:100%;
	background-color:#009;
	color:#fff;
	border:2px solid #06F;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
}
</style>
</head>
<body>

<!--crete a division using class-->
<div class="email">       

<!--heading of the markup page-->                                     
<h1 align="center">Sending Emails Through Localhost</h1>       
<hr/>

<!--crete a form using POST method which is more secure than GET-->
<form action="" method="post" style="text-align:center;">     

<!--text for receipent mail-->     
<input type="text" placeholder="Email Id of Receipent" name="email" id="email"><br/><br/>  

<!--text for subject of the mail-->     
<input type="text" Placeholder="Enter Your Subject Here" name="subject" id="subject"><br/><br/> 

<!--textarea for mail content-->  
<textarea name="body" id="body" placeholder="Enter your Message Here" cols="50" rows="10"></textarea>             
<br/><br/>

<!--submit if you five the all entries in the form structure-->
<input type="submit" value="Send Email" name="submit" />    

<!--Error will display here-->   
<span><?php echo $error;?></span>     
</form>
</div>
</body>
</html>