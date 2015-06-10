<?php
$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
if(empty($_POST['senderEmail'])){
	echo"no email address found";
	exit;


//variables.senderName = txName.text;
		//variables.senderEmail = txEmail.text;
		//variables.senderMsg = txMessage.text;
				//variables.senderShow = show_name.text;


}
$senderName		= $_POST['senderName'];
$senderEmail	= $_POST['senderEmail'];
$senderMsg		= nl2br($_POST['senderMsg']);
$senderShow  = $_POST['senderShow'];

$sitename		= "your site name here";
$to 			= "paddlemonster@gmail.com";
$ToName 		= "Your name";
$date 			= date("m/d/Y H:i:s");
$ToSubject 		= "Email From $senderName via $sitename";
$comments 		= $msgPost;
$EmailBody 		= "A visitor to ENKTRAVEL has left the following information: <br /> <br /> 
              	NAME: $senderName
			 	<br /><br />
				PHONE NUMBER:
			  	<br />$senderMsg<br /><br />
				
				EMAIL: <br />
				$senderEmail<br /><br />
				
				NAME OF SHOW THAT $senderName WISHES TO ATTEND : <br />
				$senderShow
				
				
			  	<br />";  
$EmailFooter	= "<br />Sent: $date<br /><br />";
$Message 		= $EmailBody.$EmailFooter;
$ok = mail($to, $ToSubject, $Message, $headers . "From:$senderName <".$to.">");
if($ok){
	echo "retval=1";
}else{
	echo "retval=0";
}

?>