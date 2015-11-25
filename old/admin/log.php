<?php @session_start();
if (isset($_POST['log'])) { $login = $_POST['log']; if ($login == '') { unset($login);} }
if (isset($_POST['pass'])) { $password =$_POST['pass']; if ($password == '') { unset($password);} }

include_once '../includes/mysql.inc.php';

$md = md5($password);
$query = "SELECT * FROM `user` WHERE `username` = '$login' and `password` = '$md'"; 
$res = mysql_query($query) or die(mysql_error()); 
$number = mysql_num_rows($res); 
if ($number == 0) {
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL</title>


</head>
<body>
<div id="main_container">

	<div class="header_login">
    <div class="logo"></div>
    
    </div>

     
         <div class="login_form">
         <h3>Admin Panel Login</h3><center>
         <?php 
         if (isset($_GET['m']) && $_GET['m']=='sesover'){
            echo '<p>Սեսիայի ժամանակն ավարտված է</p>';
         }
         else {
         echo '<h1>Login or Password is incorrect!</h1></center>'; }
         ?>
         <!--<a href="#" class="forgot_pass">Forgot password</a> -->
         
         <form action="log.php" method="post" class="niceform" id="add">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="log" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="pass" id="" size="54" name="" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" name="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  

</div>		
</body>
</html>
   <?php
} else  {

$result=mysql_query($query);
$row=mysql_fetch_array($result);
$id=$row['id'];

$sql_login="select * from `user` WHERE `id`='$id'";
$result_login=mysql_query($sql_login);
$row_login=mysql_fetch_array($result_login);
$_SESSION['user_login'] = $login;
$_SESSION['user_id'] = $row['id'];
$b = $row['username'];

if ($_SESSION['user_login'] == $b ){
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=admin.php">'; } 
}
?>
