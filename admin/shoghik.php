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
<!--TinyMCE start -->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce_dev.js"></script> 
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<script language="javascript" type="text/javascript">
	tinyMCE.init({
	file_browser_callback : "tinyBrowser",
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
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
?>
<div style="width:1000px; height:220px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1>Shoghik Page Content</h1></div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
<?include ('sqlconfig.php');
	$query= mysql_query("SELECT * FROM shoghik WHERE id=1");
$res = mysql_fetch_array($query)
	
?>
</div>

<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
<?
echo '<form method="post" action="php/shoghikedit.php">
<b>Content Arm:</b><textarea name="contarm">'.$res['contentarm'].'</textarea><br><b>Content Eng:</b><textarea name="conteng">'.$res['contenteng'].'</textarea><br>

<input type="submit" name="submit" value="edit & save" />
</form>';
?>
</div>


</body>
</html>

<?
}
?>