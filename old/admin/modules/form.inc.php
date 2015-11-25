<?php 



// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php?p=add';
    
    // Pass along search terms?
    if (isset($_GET['terms'])) {
        $url .= '&terms=' . urlencode($_GET['terms']);
    }
    
    header ("Location: $url");
    exit; 
    
} // End of defined() IF.
if ($_GET['type']=='add' || $_GET['type']=='edit'){
if (isset($_GET['id'])){
    $id=mysql_real_escape_string($_GET['id']);
$query=mysql_query("SELECT * FROM `content` WHERE `id`=$id");
$data=mysql_fetch_array($query);}
 ?> 
 
                        <h2>Add  - News</h2>
                    <div class="entry">
                        <div class="sep"></div>
                    </div>
                            <form action="includes/edit.inc.php?<?if (isset($_GET['p'])){echo "p=".$_GET['p']."&";}if (isset($_GET['category'])){echo 'category='.$_GET['category'].'&';} echo 'type='.$_GET['type']; if (isset($id)){echo "&id=$id";}?>" method="post" ENCTYPE="multipart/form-data">
					<div class="element">
						<label for="name">Title Armenian<span class="red">(required)</span></label>
						<input id="title" name="title-am" class="text" value="<?echo $data['title-am']?>" />
					</div>
                    <div class="element">
						<label for="name">Title English<span class="red">(required)</span></label>
						<input id="title" name="title-eng" class="text" value="<?echo $data['title-eng']?>"/>
					</div>
				
					<div class="element">
						<label for="attach">Attachments <span>(optional)</span></label>
						<input type="file" class="img" name="img" />
                        <?if (!empty($data['image'])){echo '<img src=../images/content/'.$data['image'].' width="150"/>';}
                        ?>
					</div>
					<div class="element">
						<label for="content-am">Content Armenian<span>(optional)</span></label>
						<textarea id="textarea" name="content-am" class="content"  aria-hidden="true"  rows="50" cols="100"><?echo $data['text-am']?></textarea>
      
				
						<label for="content-eng">Content English<span>(optional)</span></label>
						<textarea id="textarea2" name="content-eng" class="content" aria-hidden="true"  rows="50" cols="100"><?echo $data['text-eng']?></textarea>
					
						<label for="date">Date <span class="red">(required)</span> (Use this in GOOGLE CHROME browser (example for other browsers-2013-12-24))</label>
						<input type="date" class="date" name="date" value="<?echo $data['data']?>" class="text" />
					</div>
				
					<div class="entry">
						<input type="submit" value="SAVE" />
					</div>
				</form>
    <?}//delete script
    if ($_GET['type']=='delete'){
                $id=mysql_real_escape_string($_GET['id']);
                
        $query=mysql_query("SELECT `image` FROM `content` WHERE `id`=$id");
        $image=mysql_fetch_array($query);
        unlink("../images/content/".$image['image']);
        $delet=mysql_query("DELETE FROM `content` WHERE `id`='$id'");
        if ($delete){echo 'done';}else {echo 'error';}
        echo "<h2 align=\"center\">Successfully deleted!</h2>";
       ?> <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><h3 align="center">Go back</h3></a>
   <? }
    
    ?>