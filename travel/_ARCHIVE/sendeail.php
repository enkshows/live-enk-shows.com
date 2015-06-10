<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Sendemail Script</title>
</head>
<body>

<!-- Reminder: Add the link for the 'next page' (at the bottom) --> 
<!-- Reminder: Change 'YourEmail' to Your real email --> 

<?php

$ip = $_POST['ip']; 
$httpref = $_POST['httpref']; 
$httpagent = $_POST['httpagent']; 
$visitor = $_POST['visitor']; 
$visitormail = $_POST['visitormail']; 
$notes = $_POST['notes'];
$attn = $_POST['attn'];
$table_black = $_POST['table_black'];
$lucite = $_POST['lucite'];
$garment = $_POST['garment'];
$Ottoman = $_POST['Ottoman']; 
$shelf  = $_POST['shelf']; 
$table_darkwood = $_POST['$table_darkwood']; 
$500_watt  = $_POST['$500_watt ']; 
$Plug_in = $_POST['$Plug_in']; 

//if (eregi('http:', $notes)) {
//die ("Do NOT try that! ! ");
//}
//if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,"."))) 
//{
//echo "<h2>Use Back - Enter valid e-mail</h2>\n"; 
//$badinput = "<h2>Feedback was NOT submitted</h2>\n";
//echo $badinput;
//die ("Go back! ! ");
//}

//if(empty($visitor) || empty($visitormail) || empty($notes )) {
//echo "<h2>Use Back - fill in all fields</h2>\n";
//die ("Use back! ! "); 
//}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ; 
$subject = $attn; 
$table_black = $table_black;
$shelf = $shelf
$lucite = $lucite
$Ottoman = $Ottoman
$table_darkwood =$table_darkwood



$notes = stripcslashes($notes); 

$message = " $todayis [EST] \n
BOOTH SIZE: $attn \n
BOOTH FURNISHINGS  \n
Table-36”x30” black: $table_black \n 
Lucite Chair: $lucite \n
Garment rack-8’ long by 68” high, steel freestanding : $garment \n
Shelf unit : $shelf \n
Ottoman: $Ottoman \n
table darkwood: $table_darkwood \n
500 watt: $500_watt \n
plug in: $plug_in \n



Browser Info: $httpagent \n
Referral : $httpref \n
";

$from = "From: $visitormail\r\n";


mail("paddlemonster@gmail.com", $subject, $message, $from);

?>
s
<p align="center">
Date: <?php echo $todayis ?> 
<br />
Thank You : <?php echo $visitor ?> ( <?php echo $visitormail ?> ) 
<br />

Attention: <?php echo $attn ?>
<br /> 
Message:<br /> 
<?php $notesout = str_replace("\r", "<br/>", $notes); 
echo $notesout; ?> 
<br />
<?php echo $ip ?> 

<br /><br />
<a href="index.html"> Next Page </a> 
</p> 

</body>
</html>