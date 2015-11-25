<?
@session_start();
if(empty($_SESSION['username'])){
echo "<meta http-equiv='refresh' content='0,index.php'>";
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
$(".mydiv3").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv5").css("display","none");
});

$("#2").click(function(){
$(".mydiv2").css("display","block");
$(".mydiv3").css("display","none");
$(".mydiv1").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv5").css("display","none");
});

$("#3").click(function(){
$(".mydiv3").css("display","block");
$(".mydiv2").css("display","none");
$(".mydiv5").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv1").css("display","none");
});


$("#4").click(function(){
$(".mydiv4").css("display","block");
$(".mydiv2").css("display","none");
$(".mydiv3").css("display","none");
$(".mydiv1").css("display","none");
$(".mydiv5").css("display","none");
});

$("#5").click(function(){
$(".mydiv5").css("display","block");
$(".mydiv2").css("display","none");
$(".mydiv3").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv1").css("display","none");
});

$('body').mouseup(function(){
$(".mydiv5").css("display","none");
$(".mydiv2").css("display","none");
$(".mydiv3").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv1").css("display","none");
});
});
</script>

<?
include "menu.php";
?>
<div style="width:1000px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1>Home Page Content</h1></div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
<table border="1" style="text-align:center"><tr><td><b>Ողջույնի խոսք:</b></td><td><b>Վերջին պաշտամունք:</b></td></tr><tr><td>
<?include ('sqlconfig.php');
	$query= mysql_query("SELECT * FROM homecontent WHERE id=14");
$res = mysql_fetch_array($query);
echo '<iframe width="300" height="230" src="http://www.youtube.com/embed/'.$res['videourl'].'" frameborder="0" allowfullscreen></iframe>';
echo '</td><td>';
$query2= mysql_query("SELECT * FROM homecontent WHERE id=15");
$res2 = mysql_fetch_array($query2);
echo '<iframe width="300" height="230" src="http://www.youtube.com/embed/'.$res2['videourl'].'" frameborder="0" allowfullscreen></iframe>
</td></tr>';
	
?>

<tr><td>
<form method="post" action="php/homeedit.php">
Youtube video URL:<br> example: http://www.youtube.com/watch?v=<font color="red">l8F0ymQJyW0</font>
<br><input type="text" name="url" />
<br><input type="submit" name="submit" value="edit & save" />
</form>
</td><td>
<form method="post" action="php/homeedit.php">
Youtube video URL:<br> example: http://www.youtube.com/watch?v=<font color="red">l8F0ymQJyW0</font>
<br><input type="text" name="url" />
<br><input type="submit" name="submit2" value="edit & save" />
</form>


</td></tr>
</table>

<table border="1" style="text-align:center; margin-top: 30px" width="750">
<tr>
	<td><b>Block 1</b></td>
	<td><b>Block 2</b></td>
	<td><b>Block 3</b></td>
</tr>
<tr>
<?include ('sqlconfig.php');
	$query_block= mysql_query("SELECT * FROM block ORDER BY `id` ASC LIMIT 0,3");
	while($res_block = mysql_fetch_array($query_block)){
		echo('<td><div><a href="block.php?id='.$res_block['id'].'">'.$res_block['title_arm'].'</a></div></td>');
	}
	
?>
</tr>
<tr>
	<td><b>Block 4</b></td>
	<td><b>Block 5</b></td>
	<td><b>Block 6</b></td>
</tr>
<tr>
<?include ('sqlconfig.php');
	$query_block= mysql_query("SELECT * FROM block ORDER BY `id` ASC LIMIT 3,3");
	while($res_block = mysql_fetch_array($query_block)){
		echo('<td><div><a href="block.php?id='.$res_block['id'].'">'.$res_block['title_arm'].'</a></div></td>');
	}
	
?>
</tr>

</table>

</div>

</body>
</html>

<?
}
?>