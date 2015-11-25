<?php
@session_start();

include ('sqlconfig.php');

if(!empty($_POST['username'])){ $login = $_POST['username'];} else echo "";

if(!empty($_POST['password'])){ $password = $_POST['password']; } else echo "";

$login = stripslashes($login);

$password = stripslashes($password);
$md5pass=md5($password);
$query = mysql_query("SELECT * FROM `admin` WHERE `username`='$login' AND `password`='$md5pass'");

if (mysql_num_rows($query) == 1) {
    
$row = mysql_fetch_assoc($query);



if(isset($_POST['remember'])){
    setcookie("username",$row['username']);
    echo $_COOKIE['username'];
}
else {
    $_SESSION['username']= $row['username'];
}

 printf("<script>document.location.href='admin.php'</script>");
}
else{
    if(!empty($_POST['username']) || !empty($_POST['password'])){$error="Սխալ մուտքանուն կամ գաղտնաբառ";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eca | admin</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery/js.js"></script>
<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="jss/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">

	</div>
	<!-- end logo -->
	
	<div class="clear">fffff</div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
<!--  start login-inner -->
	<div id="login-inner">
    <span style="position: absolute;margin-top:-30px;"><?php if(!empty($error)){echo $error;} ?></span>
      <form action="index.php" method="post">
		<table border="0" cellpadding="0" cellspacing="0">
        <tr>
        <th></th>
        <td></td>
        </tr>
		<tr>
			<th>Մուտքանուն</th>
			<td><input type="text" name="username"  class="login-inp" /></td>
		</tr>
		<tr>
			<th>Գաղտնաբառ</th>
			<td><input type="password" name="password" value="************"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login" value="Մուտք" /></td>
		</tr>
		</table>
      </form>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">Վերականգնել գաղտնաբառը</a>
 </div>
<!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">

		<div id="forgotbox-text">Գրեք ձեր էլեկտրոնային հասցեն</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>էլ.հասցե:</th>
			<td><input type="text" name="email" class="login-inp" id="mail" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login" id="forgot" value="Մուտք" /></td>
		</tr>
		</table>
		</div>
            <span id="forgot_span" style="position: absolute;margin:20px 40px;color:white;font-size:16px;line-height:5px;font-style: oblique;"></span>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Գնալ մուտքի էջ</a>
	</div>

<script>
$("#forgot").click(function(){
var email=$("#mail").val();
$.ajax({
type:"POST",
url:'forgot.php',
data: {email:email},
success:function(html)
{
$("#forgot_span").html(html);
}
});
});
</script>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->

</body>
</html>
<?php
}
?>