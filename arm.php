<?php
@session_start();
$_SESSION['lang']='arm';
if(empty($_SESSION['url'])){$url='index.php';}
else $url=$_SESSION['url'];
?>
<?if($url=="http://webex.am/eca.am/pray.php"){
echo '<meta http-equiv="refresh" content="0; URL=index.php" />';
}
else{?>
<meta http-equiv="refresh" content="0; URL=<?php echo $url; ?>" />
 <?
 }
 ?>