<?
include ('../sqlconfig.php');



/////////////

// Add new

if($_POST['submit']){
$titlearm=$_POST['title1'];
$titleeng=$_POST['title2'];
$short_text_eng=$_POST['short_text2'];
$short_text_arm=$_POST['short_text1'];
$contentarm=$_POST['contentarm'];
$contenteng=$_POST['contenteng'];
$video=$_POST['vid'];

mysql_query("INSERT INTO `video`(`link`,`title_arm`,`title_eng`,`short_text_arm`,`short_text_eng`,`content_arm`,`content_eng`) VALUES ('$video','$titlearm','$titleeng','$short_text_arm','$short_text_eng','$contentarm','$contenteng')");


}
	

// Delete
if($_POST['delete']){
$id= $_POST['id'];

$insert= mysql_query("DELETE FROM video WHERE id='$id'");
printf("<script>document.location.href='../video.php'</script>");


		echo "jnjec";
	}
	
	printf("<script>document.location.href='../video.php'</script>");

?>