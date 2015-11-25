<?
include "header.php";

?>

<div id="content" style="width:1000px;height:100%;text-align:center; margin:auto">
<?
include ('datebase/sqlconfig.php');
	$query= mysql_query("SELECT * FROM worldcouncil");
while($res = mysql_fetch_array($query)){
echo $res['content'.$lang]."<br>";
}
	
?>

</div>
<?
include_once "footer.php";
?>