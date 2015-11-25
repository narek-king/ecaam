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
<script src="../js/jquery-1.7.2.js"></script>
<link rel="stylesheet" type="text/css" href="../css/menu.css" />



</head>
<body>
<a href='logout.php' style="text-decoration:none;color:#B20000"><img src="../img/logout.png" width="22" style="float:left">Ելք</a>
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
include "../menu.php";
?>
<div style="width:1000px; height:220px;margin:auto;text-align:center;margin-top:-30px; background:url(../../img/bg2.png)"><h1>Gallery</h1></div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../../img/bg2.png)">

</div>

<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../../img/bg2.png)">


<?

//content

include ('../../datebase/sqlconfig.php');
$bg_id=$_GET['bg_id'];
$sql=mysql_query("SELECT * FROM galery WHERE id_album='$bg_id'");
while($row=mysql_fetch_array($sql)){
$image=$row['photo'];
echo '<div style="width:150px;height:130px;float:left;"><img width="100" height="80" src="../../images/gallery/content/'.$image.'" /></div>';
}




//content

?>





</div>


</body>
</html>

<?
}
?>

























