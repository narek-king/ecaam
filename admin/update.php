<?
@session_start();
 $_SESSION['edit_urel'] = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
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

<!--TinyMCE start -->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce_dev.js"></script> 
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<script language="javascript" type="text/javascript">
	tinyMCE.init({
	file_browser_callback : "tinyBrowser",
		// General options
		//mode : ".content",
		mode : "specific_textareas",
        editor_selector : "content",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,",
		theme_advanced_buttons2 : "styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons3 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|",
		theme_advanced_buttons4 : "undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons5 : "tablecontrols,|,hr,removeformat,visualaid,|",
		theme_advanced_buttons6 : "sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons7 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|",
	//	theme_advanced_buttons8 : "visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		force_p_newlines: false,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

	

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
	
	
</script>

<!-- TinyMCE end -->



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
<div style="width:1000px; height:70px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1>EDIT AND SAVE</h1></div>
<div align="center" style="width:950px;padding:25px; height:100%;margin:auto;background:url(../img/bg2.png)">
<?php
$table=$_GET['this'];
$id=$_GET['id'];
$query= mysql_query("SELECT * FROM `$table` WHERE `id`='$id'");
$res=mysql_fetch_array($query);
echo '
<form action="edit.php" method="post" enctype="multipart/form-data"> 
<table border="1">
<tr><td colspan="3" valign="top">';

if($table=="video"){echo '<iframe width="260" height="200" src="http://www.youtube.com/embed/'.$res['link'].'?rel=0" frameborder="0" allowfullscreen></iframe>
<input type="text" placeholder="Paste your link" name="upd_image" />';}
else{echo '<img width="150" src="../images/news/img/'.$res['image'].'" /><input type="file" name="upd_image" />';}

echo'</td></tr>
<tr><td>type</td><td><b>Arm content</b></td><td><b>ENG content</b></td></tr>
<tr><td>Title</td><td><textarea name="title_arm" rows="5" cols="45">'.$res['title_arm'].'</textarea></td><td><textarea name="title_eng" rows="5" cols="45">'.$res['title_eng'].'</textarea></td></tr>
<tr><td>Short text</td><td><textarea name="short_text_arm" rows="7" cols="45">'.$res['short_text_arm'].'</textarea></td>
<td><textarea name="short_text_eng" rows="7" cols="45">'.$res['short_text_eng'].'</textarea></td></tr>
<tr><td>Long text</td><td><input type="hidden" name="id" value="'.$res['id'].'" /><input type="hidden" name="image" value="'.$res['image'].'" />
<input type="hidden" value="'.$table.'" name="this" />
<textarea class="content" name="content_arm" rows="30" cols="40">'.$res['content_arm'].'</textarea></td>
<td><textarea class="content" name="content_eng" rows="30" cols="40">'.$res['content_eng'].'</textarea></td></tr>
<tr><td></td><td><input type="submit" value="Save" name="edit" /></td><td></td></tr>
</table>
</form>
';

?>



</div>
</body>
</html>

<?
}
?>