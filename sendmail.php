<?php
//to expand the phpmailer file
include"class.phpmailer.php";  

//to expand the smtp file       
include"class.smtp.php";   

//declare a variable error is as void           
$error='';             

//checks submit is pressed or not               
if(isset($_POST['submit']))           
{
	
	//checks whether any field is empty or not
	if(empty($_POST['email'])||empty($_POST['subject'])||empty($_POST['body']))      
	{
		
    //if error is found then it will be displayed
    $error="You Cannot Leave The Above Fields Empty";         
	}
	else
	{
	
	//creates an object of phpmailer class file	
	$mail=new PHPMailer(); 
    
	//send via SMTP	
	$mail->IsSMTP(); 
    
	//errors and messages	
	$mail->SMTPDebug=1;    
    
	//authenticates SMTP	
	$mail->SMTPAuth=true;   
    
	//SMTP server	
	$mail->SMTPSecure='ssl';       
	$mail->Host="smtp.gmail.com";
	
	//set the SMTP port for the GMAIL server
	$mail->Port= 465;              
	$mail->IsHTML(true);
	
	//SMTP account user name & password
	$mail->Username="dam.garg77@gmail.com"; 	
	$mail->Password="08041992";                       
	$mail->SetFrom("dam.garg77@gmail.com");
	$mail->Subject=$_POST["subject"];     
	$mail->Body=$_POST["body"];
	$mail->AddAddress($_POST["email"]);
	
	//checks Mail is send or not
	if(!$mail->send())                                 
	{
	
	//if not send then gives the type of error described in phpmailer file
	$error=$mail->ErrorInfo;                           
	}
	else
	{
	
	//otherwise sends successfully
	$error="Email Successfully Sent";                  
	}
    }
}
?>