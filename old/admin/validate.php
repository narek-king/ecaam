<?php
@session_start();
include_once '../includes/config.inc.php';
$user = mysql_real_escape_string($_POST['login']);
$password = mysql_real_escape_string(sha1($_POST['password']));
$query = mysql_query("SELECT * FROM  `users` WHERE name =  '$user' AND pass =  '$password' AND privileges = 'superuser'");
$num_rows = mysql_num_rows($query);
if ($num_rows == '0') {
    echo "error";
}
else if($num_rows == '1') {
$_SESSION['user'] = $user;
header ("Location: admin.php");
}



?>