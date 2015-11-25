<?php if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End
if ($_GET['o']=='ushadrutyun') {  
    $o = $_GET['o'];
 $query = mysql_query("SELECT * FROM `$o` WHERE 1");
 $result = mysql_fetch_array($query);
 ?>
<h3>Editing ushadrutyun section</h3>
        <form action="admin.php?o=ushadrutyun" method="post">
        <div class="element">
						<label for="content-am">Content Armenian<span>(optional)</span></label>
						<textarea name="content-am" class="short_content" class="textarea" rows="10"><?echo $result['text-am']?></textarea>
					</div>
					<div class="element">
						<label for="content-eng">Content English<span>(optional)</span></label>
						<textarea name="content-eng" class="long_content" class="textarea" rows="10"><?echo $result['text-eng']?></textarea>
					</div>
        <input type="submit" value="SAVE" />
        </form>
<?
$content_am=$_POST['content-am'];
$content_eng=$_POST['content-eng'];
$update=mysql_query("UPDATE `ushadrutyun` SET `text-am`='$content_am',`text-eng`='$content_eng' WHERE 1");

}
