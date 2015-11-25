<?
include ('../sqlconfig.php');


///////////////

// Add new

if($_POST['submit']){
$titlearm=$_POST['title1'];
$titleeng=$_POST['title2'];
$short_text_eng=$_POST['short_text2'];
$short_text_arm=$_POST['short_text1'];
$contentarm=$_POST['contentarm'];
$contenteng=$_POST['contenteng'];

$image=$_FILES['img']['name'];
mysql_query("INSERT INTO `holevents`(`image`,`title_arm`,`title_eng`,`short_text_arm`,`short_text_eng`,`content_arm`,`content_eng`) VALUES ('$image','$titlearm','$titleeng','$short_text_arm','$short_text_eng','$contentarm','$contenteng')");
if ($_FILES["img"]["error"] > 0)
  {
  echo "Error: " . $_FILES["img"]["error"] . "<br>";
  }
else
  {

move_uploaded_file($_FILES["img"]["tmp_name"],
      "../../images/news/img/" . $_FILES['img']['name']);

   include('classSimpleImage.php');
   $image = new SimpleImage();
   $image->load('../../images/news/img/'.$_FILES['img']['name']);
   $image->resize(121, 121);
   $image->save('../../images/news/tumb/'.$_FILES['img']['name']);

      echo "Stored in: " . "../../images/news/img/";
  }

}
	

// Delete
if($_POST['delete']){
$id= $_POST['id'];
$pic= $_POST['pic'];
$filelink= "../../images/news/img/".$pic;
$insert= mysql_query("DELETE FROM holevents WHERE id='$id'");
printf("<script>document.location.href='../holevents.php'</script>");
	if (is_file($filelink)) {
return unlink($filelink);
}

		echo "jnjec";
	}
	
	printf("<script>document.location.href='../holevents.php'</script>");

?>