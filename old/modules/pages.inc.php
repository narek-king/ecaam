<?php # Script 2.5 - pages.inc.php

/* 
 *  This is the pages content module.
 *  This page is included by index.php.
 */

// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.

//query
       
?>
<div class="pages-content-top"></div>
<div class="pages-content-center">
    <? 
       
        $title='title-'.$lang;
        $text='text-'.$lang;
      //  $categry=mysql_real_escape_string($_GET['p']);
      $categry=mysql_real_escape_string(stripslashes($_GET['p']));
        // begin to generate 1st page
        if (isset($_GET['p']) && !isset($_GET['id'])){
        
         /* Setup vars for query. */
        $tbl_name="content";
        $adjacents = 3;
        $q1="SELECT * FROM `content` WHERE `category`='$categry'";
        $qq=mysql_query($q1);
        $total_pages = mysql_numrows($qq);
        //echo $total_pages;
        
        //$total_pages = 2;
        $targetpage = "index.php?"; 	//your file name  (the name of this file)
        $limit = 8; 								//how many items to show per page
        $page = $_GET['r'];
                        
        if($page) 
            $start = ($page - 1) * $limit; 			//first item to display on this page
        else
            $start = 0;								//if no page var is given, set start to 0
						
						/* Get data. */
					//	$sql = "SELECT * FROM `content` WHERE `category`='$categry' ORDER BY `data` DESC LIMIT $start, $limit";
					//	$result = mysql_query($sql);
						
						
        //end of paging
        
        
       
        include_once("modules/paging.inc.php");

        
   if ($total_pages > 1){
       // mb_internal_encoding("UTF-8");
        $q6="SELECT * FROM `content` WHERE `category`='$categry' ORDER BY `data` DESC LIMIT $start, $limit";
        $qw=mysql_query($q6);
        while ($result=mysql_fetch_array($qw)){
            print "<div class='article'><a href='index.php?p=".$categry."&id=".$result['id']."'><h2 style = color:red;margin:15px;>".$result[$title]."</h2></a><div class='content-article'>";
				if($result['image'] == ''){}
				else {
				print "<div class='img-article'>";
				print "<img src=images/content/".$result['image']."></img></div>";
				}
            	print "<div class='article-text'>".strip_tags(substr($result[$text], 0, 700))."...</div></div></div><p><a href='#'></a></p><hr />";
                
                //<p><a href='index.php?p=".$categry."&id=".$result['id']."'>".$langu['MORE']."</a></p>
        }// end of while loop
        } // end of else if
    ?>
    <?=$pagination;
     if($total_pages <1){echo $langu['NO_MATERIALS'];}
                
        else if($total_pages == 1){            
            $result_history_arm = mysql_fetch_array($qq);
				print "<div class=\'article\'><h2>".$result_history_arm[$title]."</h2><div class=\'content-article\'>";
				if($result_history_arm['image'] == ''){}
				else {
				print "<div class=\'img-article\'>";
				print "<img src=images/content/".$result_history_arm['image']."></img></div>";
				}
				print "<div class='article-text'>".$result_history_arm[$text]."</div></div></div>";
			}
            
            } // end of 1st page generator
    //begin to generate 2nd page
    if (isset($_GET['id'])){
        // $categry=mysql_real_escape_string($_GET['p']);
      $categry=mysql_real_escape_string(stripslashes($_GET['p']));
      $id = mysql_real_escape_string(stripslashes($_GET['id']));
        $q2='';
        $qq=mysql_query("SELECT * FROM `content` WHERE `category`='$categry' AND `id`='$id'");
        $result = mysql_fetch_array($qq);
				print "<div class=\"article\"><h2 style = \"color:red;margin:15px;text-align:center;\">";
                echo $result[$title];
                print "</h2><div class=\"content-article\">";
				if($result['image'] == ''){}
				else {
				print "<div class='img-article'>";
				print "<img src=images/content/".$result['image']."></img></div>";
				}
				print "<div class='article-text'>".$result[$text]."</div></div></div>";
               
              
    }
    ?>
</div>
<div class="pages-content-fot"></div>

