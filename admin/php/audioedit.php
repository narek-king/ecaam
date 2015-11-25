<?
@session_start();
include ('../sqlconfig.php');

if($_POST['submit']){
$arm=$_POST['title1'];
$eng=$_POST['title2'];
$audio= $_POST['audio'];
mysql_query("INSERT INTO audio(`link`,`title_arm`,`title_eng`) VALUES('$audio','$arm','$eng')");
}

if($_POST['edit']){
echo $arm=$_POST['title1'];
echo $eng=$_POST['title2'];
echo $audio= $_POST['audio'];
echo $id= $_POST['id'];
mysql_query("UPDATE audio SET link='$audio', title_arm='$arm', title_eng='$eng' WHERE id='$id'");
}

if($_POST['delete']){
$id= $_POST['id'];
mysql_query("DELETE FROM audio WHERE id='$id'");
}

printf("<script>document.location.href='".$_SESSION['edit_urel']."'</script>");
?>