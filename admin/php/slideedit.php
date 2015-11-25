<?

include ('../sqlconfig.php');

if($_POST['submit']){
$text= $_POST['text'];
$link=$_POST['link'];
$image=$_FILES["file"]["name"];
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {

  move_uploaded_file($_FILES["file"]["tmp_name"],
      "../../images/slide/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "../../images/slide/" . $_FILES["file"]["name"];
	   $insert= mysql_query("INSERT INTO slide (link,text,image) VALUES('$link','$text','$image')");
    
  }
}

if($_POST['editesave']){
$text= $_POST['texted'];
$link= $_POST['linked'];
$id= $_POST['id'];
		$insert=mysql_query("UPDATE slide SET link='$link',text='$text' WHERE id='$id'");
}


if($_POST['delete']){
$id= $_POST['id'];
$pic= $_POST['pic'];
$filelink= "../../images/slide/".$pic;
$insert= mysql_query("DELETE FROM slide WHERE id='$id'");
printf("<script>document.location.href='../slide.php'</script>");
	if (is_file($filelink)) {
return unlink($filelink);
}

		echo "jnjec";
	}
	
	printf("<script>document.location.href='../slide.php'</script>");
?>