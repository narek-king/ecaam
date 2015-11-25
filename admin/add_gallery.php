<?php
include ('sqlconfig.php');

$bg=rand(1000,9999).rand(1000,9999).$_FILES["bg_gallery"]["name"];
if ($_FILES["bg_gallery"]["error"] > 0)
  {
  echo "<script>alert('Ընտրեք նկարը')</script>";
  }
else
  {
$upload=move_uploaded_file($_FILES["bg_gallery"]["tmp_name"],
      "../images/gallery/content/thumb/" . $bg);
   include('php/classSimpleImage.php');
   $image = new SimpleImage();
   $image->load('../images/news/img/'.$bg);
   $image->resize(121, 121);
   $image->save('../images/news/tumb/'.$bg);


}
if($upload && isset($_POST['title_gallery'])){
$title=$_POST['title_gallery'];
mysql_query("INSERT INTO `bg_galery`(`title_gallery`, `background`) VALUES ('$title','$bg')");
}
printf("<script>document.location.href='http://eca.am/admin/photogallery.php'</script>");
?>