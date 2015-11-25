<?
@session_start();
 $_SESSION['url'] = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
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
});f

</script>

<?
if(!empty($_GET['bg_id']) && $_GET['bg_id']!=0){
include "menu.php";
?>
<div style="width:1000px; height:70px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1>Gallery</h1></div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">

</div>

<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
<div style="width:100%;height:70px;background:url(../img/bg2.png);">
<div style="min-width:100px;height:63px;border-radius:5px;background:url(img/add.png);float:left;cursor:pointer;" class="add_photo">
</div>
</div>

<div style="width:370px;height:200px;background:url(../img/bg2.png);border-radius:10px;border:3px red dashed;position:absolute;z-index:21;margin-top:10px;margin-left:-1px;display:none;" class="add">
<div style="width:350px;height:20px;background:#ccc;padding:10px;font-size:20px;border-radius:10px 10px 0 0;"><span>Ավելացնել նկար</span></div>
<form method="post" action="add_image.php" enctype="multipart/form-data">
<table>
<tr><td>Բեռնել նկար</td></td><td><td><input type="file" name="files[]" multiple /></td></tr>
<tr><input type="hidden" name="dk" value="<?php echo $_GET['bg_id']; ?>" /><td></td><td colspan="2"><input type="submit" value="Ավելացնել" style="width:100px;height:30px;margin-left:5px;" /></td></tr>
</table>
</form>

</div>
<?

//content

include ('../../datebase/sqlconfig.php');
$bg_id=$_GET['bg_id'];
$sql=mysql_query("SELECT * FROM galery WHERE id_album='$bg_id'");
while($row=mysql_fetch_array($sql)){
$image=$row['photo'];
$id=$row['id'];
echo '<div style="width:150px;height:130px;background:#333;float:left;margin:20px 0 40px 40px;"><img width="150" height="130" src="../images/gallery/content/'.$image.'" />
<div style="width:100%;">
<form method="post" action="delete_image.php">
<table>
<tr>
<td>
<input type="hidden" value="'.$image.'" name="delete_name" /><input type="hidden" value="'.$bg_id.'" name="delete_album_id" />
</td>
<td>
<input type="submit" value="" style="margin-left:-75px;margin-top:-30px;position:absolute;background:url(../images/news/img/delete.png) center;width:22px;height:20px;border:0;" />
</td>
</tr>
</table>
</form>
</div>
</div>';
}



}
else printf("<script>document.location.href='http://webex.am/eca.am/admin/photogallery.php'</script>");
//content

?>





</div>
<script>
$("*").mouseup(function(){
$(".add").hide();
});
$(".add_photo").click(function(){
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




















