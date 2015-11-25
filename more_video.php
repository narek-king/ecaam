<?
include "header.php";

?>
<div id="content" style="width:1000px;height:100%; margin:auto">
<?
$id=$_GET['id'];

$sql=mysql_query("SELECT * FROM `video` WHERE `id`='$id'");

$content=mysql_fetch_array($sql);

echo '<div width="1000" height="100%" style="overflow:hidden;padding:10px">

<object width="560" height="315" style="float:left;padding: 0 10px 10px 0;">
		<param name="movie" value="http://www.youtube.com/v/'.$content['link'].'?hl=ru_RU&amp;version=3"></param>
		<param name="allowFullScreen" value="true"></param>
		<param name="allowscriptaccess" value="always"></param>
		<param name="wmode" value="opaque"/>
		<embed wmode="opaque" src="http://www.youtube.com/v/'.$content['link'].'?hl=ru_RU&amp;version=3" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed>
		</object><h2>'.$content['title_'.$lang].'</h2><br>'.$content['content_'.$lang].'</div>';
?>
</div>
<?
include_once "footer.php";
?>