<?php
@session_start();
include_once '../includes/config.inc.php';
if(empty($_SESSION['user'])){
?>
     <!DOCTYPE html>
<html>
<head>
<title>Nor-Avetisyan Admin</title>
<link rel="stylesheet" href="style/login.css" />
<script src="js/jquery-2.0.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('.login-button').click(function(e){
            e.preventDefault();
            var login = $('#login').val();
                password = $('#password').val();

            $.ajax({
                type: 'POST',
                url: 'validate.php',
                data: {
                    login:login,
                    password:password
                },
                success: function(data){
                    $('body').html(data);
                }
            });
        });
    });
</script>

<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form method="post">
				<h3 id="logins-error"></h3>
					<label for="login">Username:</label>
					<input id="login" name="login" class="text" />
					<label for="pass">Password:</label>
					<input id="password" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button class="login-button" class="ok">Login</button>
				</form>
			</div>
			<div class="footer">&raquo; <a href="/">Avetisyan</a> | Admin Panel</div>
		</div>
	</div>
</div>

</head>
<body>
<?php     
}
elseif(isset($_SESSION['user'])){
    header ("Location: admin.php");
}
?>