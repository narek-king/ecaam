<?
include ('sqlconfig.php');
if(isset($_POST['delete_album'])){
$delete_id=$_POST['delete_album'];

$sql1=mysql_query("DELETE FROM `bg_galery` WHERE bg_id='$delete_id'");
if($sql1){
$mysql=mysql_query("SELECT background FROM bg_galery WHERE bg_id='$delete_id'");
$tox=mysql_fetch_array($mysql);
$files1 = glob("../images/gallery/content/thumb/".$tox['photo']);
foreach($files1 as $image1){
     @unlink($image1);
}


$query=mysql_query("SELECT * FROM galery WHERE id_album='$delete_id'");
while($row=mysql_fetch_array($query)){
$file="../images/gallery/content/".$row['photo'];
$files = glob("../images/gallery/content/".$row['photo']);
foreach($files as $image){
     @unlink($image);
}
mysql_query("DELETE FROM `galery` WHERE album_id='$delete_id'");
}
}
echo "<script>alert('Ջնջված է');</script>";
}


printf("<script>document.location.href='http://eca.am/admin/photogallery.php'</script>");
?>