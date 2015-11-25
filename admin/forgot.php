<?php
include ('sqlconfig.php');

if(!empty($_POST['email'])){ $email = $_POST['email'];};

$email = stripslashes($email);

//$md5pass=md5($password);
$query = mysql_query("SELECT * FROM `admin` WHERE `email`='$email'");

if (mysql_num_rows($query) == 1) {

    
$row = mysql_fetch_assoc($query);

$new_password=rand(1000,9999).rand(1000,9999);
$message="Your new password ".$new_password;
$subject="YOUR NEW PASSWORD";

$md5pass=md5($new_password);

$update=mysql_query("UPDATE `admin` SET `password`='$md5pass',`email`='$email' WHERE `email`='$email'");
$send=mail($email, $subject, $message, "Admin Panel");
if($update && $send){
    echo "Նոր ծածկագիրը ուղղարկված է ձեր էլ. հասցեին:";
}
else echo "Խնդրում ենք կրկին փորձել:";
}
else echo "Գրեք ձեր էլեկտրոնային հասցեն:";
?>