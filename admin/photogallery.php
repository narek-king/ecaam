<?
@session_start();

if(empty($_SESSION['username'])){
printf("<script>document.location.href='http://eca.am/admin/'</script>");
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
<script src="js/input_file_modifier.js"></script>
<style>
#title{text-decoration:none;color:#fff;}
#title:hover{text-decoration:underline;}
</style>


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
include ('sqlconfig.php');
?>
<div style="width:1000px; height:70px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1>PHOT GALLERY Content</h1></div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
</div>
<div align="center" style="width:1000px; height:100%;margin:auto;">
<div style="width:990px;height:70px;background:url(../img/bg2.png);padding:5px;">
<div style="min-width:100px;height:63px;border-radius:5px;background:url(img/add.png);float:left;cursor:pointer;" class="add_gallery">
</div>
</div>


<div style="width:370px;height:200px;background:url(../img/bg2.png);border-radius:10px;border:3px red dashed;position:absolute;z-index:21;margin-top:10px;margin-left:-1px;display:none;" class="add">
<div style="width:350px;height:20px;background:#ccc;padding:10px;font-size:20px;border-radius:10px 10px 0 0;"><span>Ավելացնել ալբոմ</span></div>
<form method="post" action="add_gallery.php" enctype="multipart/form-data">
<table>
<tr>
<td>Title</td><td></td><td><input type="text" name="title_gallery" /></td><tr>
<tr><td>Background</td></td><td><td><input type="file" name="bg_gallery" /></td></tr>
<tr><td></td><td colspan="2"><input type="submit" value="Avelacnel" style="width:100px;height:30px;margin-left:5px;" /></td></tr>
</table>
</form>
</div>


<?php
$sql=mysql_query("SELECT * FROM bg_galery");
while($row=mysql_fetch_array($sql)){
$bg=$row['background'];
$title=$row['title_gallery'];
$bg_id=$row['bg_id'];
$mysql=mysql_query("SELECT * FROM galery WHERE id_album='$bg_id'");
$number=mysql_num_rows($mysql);
echo '
<div style="width:200px;min-height:180px;overflow:hidden;margin:20px 0 15px 40px;background:url(../images/gallery/content/folder_bg.png);float:left;">
<a id="title" style="outline:none;" href="gallery.php?bg_id='.$bg_id.'">
<img style="margin-top:15px;margin-left:2px;" src="../images/gallery/content/thumb/'.$bg.'" width="179" height="105" />
<div  style="width:100%;margin-top:25px;padding-bottom:10px;">
<form method="post" action="delete_gallery.php" style="float:left;">
<table>
<tr>
<td>
<input type="hidden" value="'.$bg_id.'" name="delete_album" /><input type="hidden" value="bg_galery" name="tname" />
</td>
<td>
<input type="submit" value="Delete" style="float:left;" />
</td>
</tr>
</table>
</form>
('.$number.') '.$title.'</div>
</a>
</div>';
}
?>

</div>
<script>
$("*").mouseup(function(){
$(".add").hide();
});
$(".add_gallery").click(function(){
$(".add").slideDown();
});
$(".add").click(function(){
$(".add").show();
});
</script>
</body>
</html>

<?
}
?>