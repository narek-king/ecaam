<?
session_start();
if($_SESSION['lang']=='eng'){
$email_error="Wrong email!";
$complated="Message sent!";
$error="Fill in all fields!";
}
else{
$complated="Հաղորդագրությունն ուղարկված է!";
$email_error="Սխալ հասցե!";
$error="Լրացրեք բոլոր դաշտերը!";
}

if(!empty($_POST['name']) && !empty($_POST['last_name']) && !empty($_POST['message']) &&!empty($_POST['email'])){
$email_address=$_POST['email'];
if (preg_match("/^[^@]*@[^@]*\.[^@]*$/", $email_address)) {

$headers = "From: <".$email_address.">\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n";



$name=$_POST['name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$to="eca@eca.am";
if(!empty($_POST['pray'])){
$subject= "Աղոթքի խնդրանք | ".$name." ".$last_name." | PHONE :".$phone;
}
else {$subject=$name." ".$last_name."| PHONE :".$phone;}
if(mail($to,$subject,$message, "From:" . $headers)){
echo "<script>alert('$complated');</script>";
}else{echo "<script>alert('$email_error');</script>";}

}
else {echo "<script>alert('$email_error');</script>";}
}
else echo "<script>alert('$error');</script>";

?>