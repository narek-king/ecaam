<?
@session_start();
include ('sqlconfig.php');
$sql_query="select * from `admin` ";
$result=mysql_query($sql_query);
$row=mysql_fetch_array($result);
$b = $row['username'];

if(!isset($_SESSION['username']))
{
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../index.php">';
	exit;
}

if(isset($_SESSION['username']))
{
	if($_SESSION['username']!="$b")
	{
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../index.php">';
		exit;
	}
}
?>
<!doctype html>
<html>
<head>
<title>ECA Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-1.7.2.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/niceforms-default.css" />

<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="js/tiny_mce/plugins/imagemanager/js/mcimagemanager.js"></script>
<script type="text/javascript">

tinyMCE.init({
		
		//mode : "exact",
		//elements : "comments",
		mode : 'textareas',
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager",
		
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,|,forecolor,backcolor",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		//relative_urls : false,
		content_css : "/css/styles.css",
		width : "700",
		height : "400",
		
relative_urls : true,
document_base_url : "/img/",
remove_script_host : false,
convert_urls : false,

});
</script>

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
<?
$id=mysql_real_escape_string(stripslashes($_GET['id']));
$query_block= mysql_query("SELECT * FROM block WHERE `id`=$id");
$res_block = mysql_fetch_array($query_block);
?>
<div style="width:1000px;margin:auto;text-align:center;margin-top:-30px; background:url(../img/bg2.png)"><h1><?=$res_block['title_arm']?></h1></div>
<div align="center" style="width:1000px; height:100%;margin:auto;background:url(../img/bg2.png)">
			<form></form>
			 <form action="php/block_edit.php" method="post" class="niceform" id="add">
		 			<input type="hidden" name="id" id="id" size="54" value="<?=$id?>"/>
				<fieldset >
					<dl>
                        <dt><label for="name" class="url">URL:</label></dt>
                        <dd><input type="text" name="url" id="url" size="54" value="<?=$res_block['url']?>"/></dd>
                    </dl>
					<dl>
                        <dt><label for="name" class="title">Վերնագիր ARM:*</label></dt>
                        <dd><input type="text" name="title_arm" id="title" size="54" value="<?=$res_block['title_arm']?>"/></dd>
                    </dl>
					<dl>
                        <dt><label for="name" class="title">Վերնագիր ENG:*</label></dt>
                        <dd><input type="text" name="title_eng" id="title" size="54" value="<?=$res_block['title_eng']?>"/></dd>
                    </dl>
                     <dl style="margin-top: 60px">
                        <dt ><label for="content" class="content">Պարունակություն ARM:</label></dt>
                        <dd ><textarea name="content_arm" class="content_arm" id="content_arm" rows="5" cols="36"><?=$res_block['content_arm']?></textarea></dd>
                    </dl>
					<dl style="margin-top: 60px">
                        <dt ><label for="content" class="content">Պարունակություն ENG:</label></dt>
                        <dd ><textarea name="content_eng" class="content_eng" id="content_eng" rows="5" cols="36"><?=$res_block['content_eng']?></textarea></dd>
                    </dl>
					<dl>
					</dl>

					<dl class="submit">
						<input type="submit" name="submit" id="submit" value="Save" />
                    </dl>
                     
                     
                    
                </fieldset>
         </form>

</div>

</body>
</html>
