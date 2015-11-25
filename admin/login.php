<?php
@session_start();

include ('sqlconfig.php');

if(!empty($_POST['login'])){ $login = $_POST['login']; } else echo "";

if(!empty($_POST['password'])){ $password = $_POST['password']; } else echo "";

$login = stripslashes($login);

$login = stripslashes($login);
$md5pass=md5($password);
$query = mysql_query("SELECT * FROM `admin` WHERE `username`='$login' AND `password`='$md5pass'");

if (mysql_num_rows($query) == 1) {
    
$row = mysql_fetch_assoc($query);



$_SESSION['username']= $row['username'];

echo '<i><font size="2" color="green">Մուտք...</font></i>';
echo "<meta http-equiv='refresh' content='0,admin.php'>";
}

else{ echo "<i><font size='2' color='red'>Մուտքանունը կամ/և ծածկագիրը սխալ է</font></i>
<meta http-equiv='refresh' content='2,index.php'>";

}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />