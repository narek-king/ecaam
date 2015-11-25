<?php 
//including configs
			 require('../../includes/config.inc.php');
             //getting dat
					$category = $_GET['category'];
					$title_am = $_POST['title-am'];
					$title_eng = $_POST['title-eng'];
					$content_am = $_POST['content-am'];
					$content_eng = $_POST['content-eng'];
					$date = $_POST['date'];
			//fetching errors							
					$errors = array();

					if(empty($title_am)){
						$errors[] = "Please fill Title am";
					}
                    if(empty($title_eng)){
						$errors[] = "Please fill Title english";
					}

					if(empty($date)){
						$errors[] = "Please fill Date";
					}

			//uploading file				
							
					if(!empty($_FILES['img']['name'])){
						$extension = end(explode(".",$_FILES['img']['name']));

						$name = $_FILES['img']['name'];
						$size = $_FILES['img']['size'];

						if(file_exists("../../images/content/".$name)){
							$errors[] = "File with this name already exists!";
						}

						if($extension != "jpg" && $extension != "png" && $extension != "gif" && $extension != "JPG"){
							$errors[] = "Unknown file format!";
						}
					}
					
					if(count($errors)==0){
					
					
							if(!empty($old_pic)){
								unlink("../../images/content/".$old_pic);
							}
							
							if($extension == 'jpg') {
							$pic_name = uniqid(rand(), false).".jpg";
							}
							
							if($extension == 'png') {
							$pic_name = uniqid(rand(), false).".png";
							}
							
							if($extension == 'gif') {
							$pic_name = uniqid(rand(), false).".gif";
							}
     //insert query for content
					if ($_GET['type']=='add'){
                    	$query = mysql_query("INSERT INTO `content`(`category`, `image`, `title-am`, `title-eng`, `text-am`, `text-eng`, `data`) VALUES ('$category','$pic_name','$title_am','$title_eng','$content_am','$content_eng','$date')");
                        if ($quert){echo 'done';}else {echo 'error';}
						move_uploaded_file($_FILES['img']['tmp_name'],"../../images/content/".$pic_name);
						echo "<h2 align=\"center\">Successfully done!</h2>";
					}// update query for content
                     elseif ($_GET['type']=='edit'){
					   $id=mysql_real_escape_string($_GET['id']);
                       $query=mysql_query("SELECT `image` FROM `content` WHERE `id`=$id");
                        $imageing=mysql_fetch_array($query);
                        $imageold=$imageing['image'];
                       if (!empty($pic_name)){
                        move_uploaded_file($_FILES['img']['tmp_name'],"../../images/content/".$pic_name);
                        $image=$pic_name; 
                        unlink("../../images/content/".$imageold);}
                       
                       elseif (!empty($imageold) && empty($pic_name)){$image=$imageold; }
                       else {$image='';}
                                       
                             
                        $update=mysql_query("UPDATE `content` SET `image`='$image',`title-am`='$title_am',`title-eng`='$title_eng',`text-am`='$content_am',`text-eng`='$content_eng',`data`='$date' WHERE id=$id");
                        echo "<h2 align=\"center\">Successfully done!</h2>";
                    }
                    
					else{
						print "<h3>Errors!</h3><ul><li>".join("</li><li>",$errors)."</li></ul>";
					}
                    }
?>
			<a href="../admin.php?p=<?echo $_GET['p'];?>&category=<?php echo $_GET['category']; ?>"><h3 align="center">Go back</h3></a>
            </div>
            <div class="clear"></div>


