<?php
session_start();
include ('sqlconfig.php');
$id_album=$_POST['dk'];
$url=$_SESSION['url'];


if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = rand(1000,9999).rand(1000,9999).rand(1000,9999).$key.$_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }		
        $query="INSERT INTO `galery`(`photo`,`id_album`) VALUES ('$file_name','$id_album')";
        $desired_dir="../images/gallery/content/";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"../images/gallery/content/" . $file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 mysql_query($query);			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
	   echo "<script>alert('Ավելացված է');</script>";
		echo "<script>document.location.href='".$url."'</script>.";
	}
}



/*
if ($_FILES["image"]["error"] > 0)
  {
  echo "Error: " . $_FILES["image"]["error"] . "<br>";
  }
else
  {
$upload=move_uploaded_file($_FILES["image"]["tmp_name"],
      "../images/gallery/content/" . $bg);
}
if($upload){
mysql_query("INSERT INTO `galery`(`photo`,`id_album`) VALUES ('$bg','$id_album')");
echo "<script>alert('avelacvac e');</script>";
}
$url=$_SESSION['url'];
echo "<script>document.location.href='".$url."'</script>.";


*/
?>