<?
include "header.php";

?>
<div id="content" style="width:1000px;height:100%; margin:auto">
<?
$id=$_GET['id'];
$abc=$_GET['abc'];
$sql=mysql_query("SELECT * FROM `$abc` WHERE `id`='$id'");

$content=mysql_fetch_array($sql);
if($abc=="newscontent"){
$visited=$content['visited']+1;
mysql_query("UPDATE `$abc` SET `visited` = '$visited' WHERE `id` = '$id'");
}
echo '<div width="1000" height="100%" style="overflow:hidden; padding:10px">
<img src="images/news/img/'.$content['image'].'" style="float:left; max-width:400px; padding:10px 10px 10px 0;"  />
<h2>'.$content['title_'.$lang].'</h2><br>'.$content['content_'.$lang].'</div>';
?>
</div>
<?
include_once "footer.php";
?>