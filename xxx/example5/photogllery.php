<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset=utf-8 />
	<title>ColorBox Examples</title>
	<style type="text/css">
		body{font:12px/1.2 Verdana, sans-serif; padding:0 10px;}
		a:link, a:visited{text-decoration:none; color:#416CE5; border-bottom:1px solid #416CE5;}
		h2{font-size:13px; margin:15px 0 0 0;}
	</style>
	<link media="screen" rel="stylesheet" href="colorbox.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
	<script src="../colorbox/jquery.colorbox.js"></script>
	<script>
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
<?
include('../../datebase/sqlconfig.php');
$sql1=mysql_query("SELECT * FROM galery ORDER BY id_album DESC");
$q=mysql_fetch_array($sql1);
$u=$q['id_album'];
for($e=1;$e<=$u;$e++){
echo '$(".group'.$e.'").colorbox({rel:"group'.$e.'"});';
}
?>
			//$(".group1").colorbox({rel:"group1"});
			//$(".group2").colorbox({rel:'group2'});
			//$(".group3").colorbox({rel:'group3'});
			//$(".group4").colorbox({rel:'group4'});
			$(".ajax").colorbox();
			$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
			$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
			$(".inline").colorbox({inline:true, width:"50%"});
			$(".callbacks").colorbox({
				onOpen:function(){ alert('onOpen: colorbox is about to open'); },
				onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
				onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
				onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
				onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
			});
			
			//Example of preserving a JavaScript event for inline calls.
			$("#click").click(function(){ 
				$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
				return false;
			});
		});
	</script>
</head>
<body>

<div style="width:850px;min-height:600px;padding:30px;">
<?
$sql1=mysql_query("SELECT * FROM galery ORDER BY id_album DESC");
$b=mysql_fetch_array($sql1);
$i=$b['id_album'];
$a=1;
while($a<=$i){
$m=1;
$sql=mysql_query("SELECT * FROM galery WHERE id_album='$a'");
while($e=mysql_fetch_array($sql)){
$id_album=$e['id_album'];
$photo=$e['photo'];
if($m==1){
$query=mysql_query("SELECT * FROM bg_galery WHERE `bg_id`='$id_album'");
$fetch1=mysql_fetch_array($query);
$bg=$fetch1['background'];
echo '<div style="width:180px;height:100px;margin:5px;background:url(../content/ssss.png) no-repeat;float:left;padding:70px 5px 5px 14px;z-index:10;"><a class="group'.$a.'" style="outline:none;" href="../content/'.$photo.'" onclick="return false"><img  src="../content/'.$bg.'" width="170" height="97" /></a></div>';
$m=2;
}
else {
echo '<a class="group'.$a.'" style="display:none;" href="../content/'.$photo.'"></a>';
}
}
$a++;
}

?>
</div>
</body>
</html>