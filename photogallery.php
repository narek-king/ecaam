<?
include "header.php";

?>
<div id="content" style="width:1000px;height:100%;overflow:hidden; margin:auto">
<!DOCTYPE html>
<html lang="en">
	<head>
	<style type="text/css">
		a:link, a:visited{text-decoration:none; color:#416CE5;}
        #title{color:#fff;}
        #title:hover{text-decoration:underline;}
		h2{font-size:13px; margin:15px 0 0 0;}
	</style>
	<link media="screen" rel="stylesheet" href="images/gallery/example5/colorbox.css" />

	<script src="images/gallery/colorbox/jquery.colorbox.js"></script>
	<script>
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
<?
include('../../datebase/sqlconfig.php');
$sql1=mysql_query("SELECT bg_id FROM bg_galery");
while($q=mysql_fetch_array($sql1)){
$album_id=$q['bg_id'];
echo '$(".group'.$album_id.'").colorbox({rel:"group'.$album_id.'", transition:"none", maxWidth:"75%", maxHeight:"75%"});';
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
<style>
span:hover{text-decoration:underline;}
</style>
</head>
<body>

<div style="width:1000px;height:100%;padding:30px;" align="center">
<?

$query=mysql_query("SELECT * FROM bg_galery");
while($fetch1=mysql_fetch_array($query)){
$bg=$fetch1['background'];
$title=$fetch1['title_gallery'];
$album_id=$fetch1['bg_id'];
$mysql=mysql_query("SELECT * FROM galery WHERE id_album='$album_id'");
$number=mysql_num_rows($mysql);
echo '<div style="width:200px;min-height:180px;overflow:hidden;margin:0 0 15px 30px;background:url(images/gallery/content/folder_bg.png);float:left;">
<a id="title" class="group'.$album_id.'" style="outline:none;" href="images/gallery/content/thumb/'.$bg.'" onclick="return false">
<img style="margin-top:15px;margin-left:2px;" src="images/gallery/content/thumb/'.$bg.'" width="179" height="105" />
<div style="width:100%;margin-top:25px;padding-bottom:5px;">('.$number.') '.$title.'</div>
</a>
</div>';
while($row=mysql_fetch_array($mysql)){
$photo=$row['photo'];
echo '<a class="group'.$album_id.'" style="display:none;" href="images/gallery/content/'.$photo.'"></a>';
}
}

?>
</div>
</body>
</html>



</div>
<?
include_once "footer.php";
?>