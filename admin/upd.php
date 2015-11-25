<?php
@session_start();
if(isset($_POST['oldpassword'])){$oldpassword=$_POST['oldpassword'];}
if(isset($_POST['newpassword'])){$newpassword=$_POST['newpassword'];}
if(isset($_POST['re_newpassword'])){$re_newpassword=$_POST['re_newpassword'];}
$user=$_SESSION['username'];
$sql=mysql_query("SELECT * FROM `admin` WHERE `username`='$user'");
$row=mysql_num_rows($sql);
if($_POST['submit']){
    if($newpassword==$re_newpassword && $row==1){
    
    $md5pass=md5($newpassword);
    $upd=mysql_query("UPDATE `admin` SET `password`='$md5pass' WHERE `username`='$user'");
    if($upd){echo "<script>alert('Password@ poxvac e');</script>";
    }
    }
    else {echo "<script>alert('ERROR!');</script>";}
}
printf("<script>document.location.href='http://eca.am/admin/admin.php'</script>");
?>