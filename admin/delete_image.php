<?
session_start();
include ('sqlconfig.php');
if(isset($_POST['delete_name'])){
$images=$_POST['delete_name'];
$delete_album_id=$_POST['delete_album_id'];
$sql=mysql_query("DELETE FROM `galery` WHERE photo='$images'");
if($sql){
$files = glob("../images/gallery/content/".$images);
foreach($files as $image){
     @unlink($image);
}
echo "<script>alert('Ջնջված է');</script>";
}
}
$url=$_SESSION['url'];
echo "<script>document.location.href='".$url."'</script>.";
?>