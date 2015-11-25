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
<script type="text/javascript" src="js/formfieldlimiter.js"></script>


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
<div style="width:1000px; height:220px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1>SLIDE Content</h1></div>
<div style="width:1000px; min-height:100px;margin:auto;background:url(../img/bg2.png)">

<?
include ('sqlconfig.php');
$query= mysql_query("SELECT * FROM slide");
while($row= mysql_fetch_array($query)){
echo "<table border='1' width='100%'><tr><td width='275'  rowspan='2'><form action='php/slideedit.php' method='post'>";
echo "<a href='".$row['link']."'><img src='../images/slide/".$row['image']."' style='max-width:400px;margin-left:5px;' /></a></td><td>TEXT: (max 135 symbols)<br><textarea name='texted' rows='6' cols='55'>".$row['text']."</textarea></td>";
echo "<tr><td>URL:<input name='linked' size='40' type='text' value='".$row['link']."'></td></tr>

<br><input type='hidden' name='id' value='".$row['id']."'>
<input type='hidden' name='pic' value='".$row['image']."'>
</tr><tr><td colspan='2' align='center'><input type='submit' name='delete' value='delete'><input type='submit' name='editesave' value='Edite & Save'></td>
</form></tr></table>";
}
?>

<br><hr>
</div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
<form method="post" action="php/slideedit.php" enctype="multipart/form-data">
<table><tr><td>
Link:</td><td><input type="text" name="link" /></td></tr>
<tr><td><div id="john-status"></div></td><td><textarea id="johndoe" name="text"></textarea></td></tr>
<tr><td>Image(actual size  570x270):</td><td><input type="file" name="file" /></td></tr>
<tr><td colspan='2'><input type="submit" name="submit" value="upload" /></td></tr>
</table>

</form>
<script>
fieldlimiter.setup({
	thefield: document.getElementById("johndoe"), //reference to form field
	maxlength: 135,
	statusids: ["john-status"], //id(s) of divs to output characters limit. If non, set to empty array [].
	onkeypress:function(maxlength, curlength){ //onkeypress event handler
		//define custom event actions here if desired
	}
})

</script>


</div>


</body>
</html>

<?
}
?>