<?
include ('../sqlconfig.php');

// Add new
if(isset($_POST['submit'])){
$contarm=$_POST['contarm'];
$conteng=$_POST['conteng'];
$insert= mysql_query("UPDATE holidays SET contentarm='$contarm',contenteng='$conteng' WHERE id=1");
printf("<script>document.location.href='../holidays.php'</script>");
}

// Delete
if(isset($_POST['delete'])){
$id= $_POST['id'];
$delet = mysql_query("DELETE FROM holidays WHERE id='$id'");
printf("<script>document.location.href='../holidays.php'</script>");
}

?>