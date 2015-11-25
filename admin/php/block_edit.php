<?
@session_start();
include ('../sqlconfig.php');
$sql_query="select * from `admin` ";
$result=mysql_query($sql_query);
$row=mysql_fetch_array($result);
$b = $row['username'];

if(!isset($_SESSION['username']))
{
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../../index.php">';
	exit;
}

if(isset($_SESSION['username']))
{
	if($_SESSION['username']!="$b")
	{
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../../index.php">';
		exit;
	}
}
// Add new
if(isset($_POST['submit'])){
	$id=mysql_real_escape_string(stripslashes($_POST['id']));
	$url=mysql_real_escape_string(stripslashes($_POST['url']));
	$title_arm=mysql_real_escape_string(stripslashes($_POST['title_arm']));
	$title_eng=mysql_real_escape_string(stripslashes($_POST['title_eng']));
	$content_arm=mysql_real_escape_string(stripslashes($_POST['content_arm']));
	$content_eng=mysql_real_escape_string(stripslashes($_POST['content_eng']));

$insert= mysql_query("UPDATE block SET content_arm='$content_arm',content_eng='$content_eng',url='$url',title_arm='$title_arm',title_eng='$title_eng' WHERE id=$id");
if($insert){echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../admin.php">';}else{echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../block.php?id='.$id.'">';}
}


?>