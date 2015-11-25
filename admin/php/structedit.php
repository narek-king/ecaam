<?
include ('../sqlconfig.php');

// Add new
if(isset($_POST['submit'])){
$contarm=$_POST['contarm'];
$conteng=$_POST['conteng'];
$insert= mysql_query("INSERT INTO ecastructure (contentarm,contenteng) VALUES('$contarm','$conteng')");
printf("<script>document.location.href='http://eca.am/admin/structure.php'</script>");
}

// Delete
if(isset($_POST['delete'])){
$id= $_POST['id'];
$delet = mysql_query("DELETE FROM ecastructure WHERE id='$id'");
printf("<script>document.location.href='http://eca.am/admin/structure.php'</script>");
}

?>