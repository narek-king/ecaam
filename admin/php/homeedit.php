<?
include ('../sqlconfig.php');

if(isset($_POST['submit'])){
$url=$_POST['url'];
$insert= mysql_query("UPDATE homecontent SET videourl='$url' WHERE id=14");
printf("<script>document.location.href='../admin.php'</script>");
}

if(isset($_POST['submit2'])){
$url=$_POST['url'];
$insert= mysql_query("UPDATE homecontent SET videourl='$url' WHERE id=15");
printf("<script>document.location.href='../admin.php'</script>");
}
?>