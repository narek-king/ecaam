<meta charset="utf8" />
<div align="center" style="width:1000px; min-height:100px;margin:auto;background:url(../../img/bg2.png)">﻿
<?
include ('../sqlconfig.php');

// Add new

if($_POST['submit']){
$titlearm=$_POST['title1'];
$titleeng=$_POST['title2'];
$short_text_eng=$_POST['short_text2'];
$short_text_arm=$_POST['short_text1'];
$contentarm=$_POST['contentarm'];
$contenteng=$_POST['contenteng'];

$image=$_FILES['img']['name'];
mysql_query("INSERT INTO `newscontent`(`image`,`title_arm`,`title_eng`,`short_text_arm`,`short_text_eng`,`content_arm`,`content_eng`) VALUES ('$image','$titlearm','$titleeng','$short_text_arm','$short_text_eng','$contentarm','$contenteng')");
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
printf("<script>document.location.href='../news.php'</script>");
}
	

// Delete
if($_POST['delete']){
$id= $_POST['id'];
$pic= $_POST['pic'];
$filelink= "../../images/news/img/".$pic;
$insert= mysql_query("DELETE FROM newscontent WHERE id='$id'");
printf("<script>document.location.href='../news.php'</script>");
	if (is_file($filelink)) {
return unlink($filelink);
}

		echo "jnjec";

	}
	
//edit

if($_POST['edit']){
$id= $_POST['id'];
$sql=mysql_query("SELECT * FROM newscontent WHERE id='$id'");
$res=mysql_fetch_array($sql);

echo '<table border="1" width="800">
		<tr><td width="200"></td><td><b> Content Arm </b></td></tr>
		<tr><td><img style="width:200px" height="150px" src="../../images/news/tumb/'.$res['image'].'" /><br><input type="file" name="upd_image" /></td><td><textarea rows="10" cols="70">'.$res['title_arm'].'</textarea></td></tr>
		<tr><td><b>Short txt</b></td><td><textarea rows="10" cols="70">'.$res['short_text_arm'].'</textarea></td></tr>
		<tr><td><b>long txt</b></td><td><textarea rows="10" cols="70">'.$res['content_arm'].'</textarea></td></tr>
		</table><br>';
echo '<table border="1" width="800">
		<tr><td width="200"></td><td><b> Content Eng </b></td></tr>
		<tr><td><img style="width:200px" height="150px" src="../../images/news/tumb/'.$res['image'].'" /><br><input type="file" name="upd_image" /></td><td><textarea rows="10" cols="70">'.$res['title_eng'].'</textarea></td></tr>
		<tr><td><b>Short txt</b></td><td><textarea rows="10" cols="70">'.$res['short_text_eng'].'</textarea></td></tr>
		<tr><td><b>Long txt</b></td><td><textarea rows="10" cols="70">'.$res['content_eng'].'</textarea></td></tr>
		<tr><td></td><td> <form method="POST" action="php/newsedit.php">
		<input type="hidden" name="id" value="'.$res['id'].'" />
                <input type="submit" value="save" name="save" />
		</form> </td></tr>
		</table><br><hr>';
}


/*
if($_POST['edit']){
$id= $_POST['id'];
$sql=mysql_query("SELECT * FROM newscontent WHERE id='$id'");
$row=mysql_fetch_array($sql);
echo "Armcontent<br><textarea rows='10' cols='100'>".$row['content_arm']."</textarea><br>Engcontent<br><textarea rows='10' cols='100'>".$row['content_eng']."</textarea>";
}
*/
?>