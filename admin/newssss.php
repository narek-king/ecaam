<?
@session_start();

if(empty($_SESSION['username'])){
printf("<script>document.location.href='http://webex.am/eca.am/admin/'</script>");
}
else{
?>
<!doctype html>
<html>
<head>
<title>ECA Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-1.7.2.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu.css" />



</head>
<body>
<a href='logout.php' style="text-decoration:none;color:#B20000"><img src="img/logout.png" width="22" style="float:left">Ելք</a>
<br><br>
<script>
$(document).ready(function(){
$("#1").click(function(){
$(".mydiv1").css("display","block");
$(".mydiv2").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv5").css("display","none");
});

$("#2").click(function(){
$(".mydiv2").css("display","block");
$(".mydiv1").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv5").css("display","none");
});

$("#4").click(function(){
$(".mydiv4").css("display","block");
$(".mydiv2").css("display","none");
$(".mydiv1").css("display","none");
$(".mydiv5").css("display","none");
});

$("#5").click(function(){
$(".mydiv5").css("display","block");
$(".mydiv2").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv1").css("display","none");
});
$('body').mouseup(function(){
$(".mydiv5").css("display","none");
$(".mydiv2").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv1").css("display","none");
});
});
</script>

<?
include "menu.php";
include ('sqlconfig.php');
?>
<div style="width:1000px; height:220px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1>NEWS Page Content</h1></div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
<?include ('sqlconfig.php');
	$query= mysql_query("SELECT * FROM newscontent");
while($res = mysql_fetch_array($query)){

echo '<table border="1" width="800">
		<tr><td width="200"></td><td><b> Content Arm </b></td></tr>
		<tr><td><img style="width:100%" src="../images/news/tumb/'.$res['image'].'" /></td><td>'.$res['title_arm'].'</td></tr>
		<tr><td><b>Short txt</b></td><td>'.$res['short_text_arm'].'</td></tr>
		<tr><td><b>long txt</b></td><td>'.$res['content_arm'].'</td></tr>
		</table><br>';
echo '<table border="1" width="800">
		<tr><td width="200"></td><td><b> Content Eng </b></td></tr>
		<tr><td><img style="width:100%" src="../images/news/tumb/'.$res['image'].'" /></td><td>'.$res['title_eng'].'</td></tr>
		<tr><td><b>Short txt</b></td><td>'.$res['short_text_eng'].'</td></tr>
		<tr><td><b>Long txt</b></td><td>'.$res['content_eng'].'</td></tr>
		<tr><td></td><td> <form method="POST" action="php/newsedit.php">
		<input type="hidden" name="id" value="'.$res['id'].'" />
		<input type="submit" value="delete" name="delete" />
                <input type="submit" value="edit" name="edit" />
		</form> </td></tr>
		</table><br><hr>';
}
	
?>
</div>

<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
<form method="post" action="php/newsedit.php" enctype="multipart/form-data">
<table>
<tr><td></td><td><input type="file" name="img"></td><td></td></tr>
<tr><td></td><td>content Arm</td><td>Content Eng</td></tr>
<tr><td>Title:</td><td><textarea name="title1"></textarea></td><td><textarea name="title2"></textarea></td></tr>
<tr><td>Short text:</td><td><textarea name="short_text1"></textarea></td><td><textarea name="short_text2"></textarea></td></tr>
<tr><td>Long text:</td><td><textarea name="contentarm"></textarea></td><td><textarea name="contenteng"></textarea></td></tr>
<tr><td><input type="submit" name="submit" value="save" /></td></tr>
</table>
</form>
</div>


</body>
</html>

<?
}
?>