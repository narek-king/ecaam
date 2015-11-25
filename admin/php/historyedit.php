<?
include ('../sqlconfig.php');

// Add new
if(isset($_POST['submit'])){
$contarm=$_POST['contarm'];
$conteng=$_POST['conteng'];
$insert= mysql_query("UPDATE ecahistory SET contentarm='$contarm',contenteng='$conteng' WHERE id=2");
printf("<script>document.location.href='../history.php'</script>");
}

// Delete
if(isset($_POST['delete'])){
$id= $_POST['id'];
$delet = mysql_query("DELETE FROM ecahistory WHERE id='$id'");
printf("<script>document.location.href='../history.php'</script>");
}

?>