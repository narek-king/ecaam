<?
@session_start();
include ('sqlconfig.php');

// Add new

if($_POST['submit']){
$titlearm=$_POST['title1'];
$titleeng=$_POST['title2'];
$short_text_eng=$_POST['short_text2'];
$short_text_arm=$_POST['short_text1'];
$contentarm=$_POST['contentarm'];
$contenteng=$_POST['contenteng'];
$table=$_POST['this'];
if($table=="video"){
$filde="link";
$video= $_POST['video'];
mysql_query("INSERT INTO `video`(`link`,`title_arm`,`title_eng`,`short_text_arm`,`short_text_eng`,`content_arm`,`content_eng`) VALUES ('$video','$titlearm','$titleeng','$short_text_arm','$short_text_eng','$contentarm','$contenteng')");
}

$image=rand(1000,9999).rand(1000,9999).$_FILES['img']['name'];
mysql_query("INSERT INTO `$table`(`image`,`title_arm`,`title_eng`,`short_text_arm`,`short_text_eng`,`content_arm`,`content_eng`) VALUES ('$image','$titlearm','$titleeng','$short_text_arm','$short_text_eng','$contentarm','$contenteng')");
if ($_FILES["img"]["error"] > 0)
  {
  echo "Error: " . $_FILES["img"]["error"] . "<br>";
  }
else
  {

move_uploaded_file($_FILES["img"]["tmp_name"],
      "../images/news/img/" . $image);
  }
echo "<script>document.location.href='".$_SESSION['edit_urel']."'</script>";
}
	

// Delete
if($_POST['delete']){
$id= $_POST['id'];
$table=$_POST['this'];
$pic= $_POST['image'];

$filelink= "../images/news/img/".$pic;
$insert= mysql_query("DELETE FROM `$table` WHERE id='$id'");
echo "<script>document.location.href='".$_SESSION['edit_urel']."'</script>";
	if (is_file($filelink)) {
return unlink($filelink);
}
		echo "jnjec";

}


//edit
if($_POST['edit']){
    $id=$_POST['id'];
$titlearm=$_POST['title_arm'];
$titleeng=$_POST['title_eng'];
$short_text_arm=$_POST['short_text_arm'];
$short_text_eng=$_POST['short_text_eng'];
$contentarm=$_POST['content_arm'];
$contenteng=$_POST['content_eng'];
$table=$_POST['this'];
if($table=="video"){ $filde="link"; 
    if(!empty($_POST['upd_image'])){$image1=$_POST['upd_image'];}
    else{$image1=$_POST['image'];}
    }
else{
$filde="image";
if(!empty($_FILES["upd_image"]["name"]))
{
    $image1=rand(1000,9999).rand(1000,9999).$_FILES["upd_image"]["name"]; 
if ($_FILES["upd_image"]["error"] > 0)
  {
  echo "<script>alert('?????? ?????');</script>";
  }
else
  {
$upload=move_uploaded_file($_FILES["upd_image"]["tmp_name"],"../images/news/img/" . $image1);



if($upload){
     $files1 = glob("../images/news/img/" .$_POST['image']);
     foreach($files1 as $photo){
     @unlink($photo);
     
}
}
  }
}
else {
    $image1=$_POST['image'];
}
}
//echo $titlearm."....".$titleeng."....".$short_text_eng.".....".$short_text_arm.".....".$contentarm."......".$contenteng.".....".$table."......".$image;
mysql_query("UPDATE `$table` SET `$filde`='$image1',`title_arm`='$titlearm',`title_eng`='$titleeng',`short_text_arm`='$short_text_arm',`short_text_eng`='$short_text_eng',`content_arm`='$contentarm',`content_eng`='$contenteng' WHERE `id`='$id'");
echo "<script>document.location.href='".$_SESSION['edit_urel']."'</script>";
}

?>
<meta charset="utf8" />