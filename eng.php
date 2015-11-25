<?php
@session_start();
$_SESSION['lang']='eng';
if(empty($_SESSION['url'])){$url='index.php';}
else $url=$_SESSION['url'];
?>
<?if($url=="http://eca.am/pray.php"){
echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
}
else{?>
<meta http-equiv="refresh" content="0; URL=<?php echo $url; ?>" />
 <?
 }
 ?>
