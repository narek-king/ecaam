	<?php # Script 2.5 - main.inc.php

/* 
 *  This is the main content module.
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
    ?>
    	<div class="pages-content-top"></div>
		<div class="pages-content-center">

			<?php
			$query_dprocashinutyun_arm = mysql_query("SELECT title, img, short_content, content, date FROM  `dprocashinutyun` WHERE category =  'dprocashinutyun' AND news_category = 'dprocashinutyun-c' AND lang =  '$lang'");
			while($result_dprocashinutyun_arm = mysql_fetch_array($query_dprocashinutyun_arm)){
				print "<div class='article'><h2>".$result_dprocashinutyun_arm['title']."</h2><div class='content-article'>";
				if($result_dprocashinutyun_arm['img'] == ''){}
				else {
				print "<div class='img-article'>";
				print "<img src=images/content/".$result_dprocashinutyun_arm['img']."></img></div>";
				}
				print "<div class='article-text'>".$result_dprocashinutyun_arm['content']."</div></div></div>";
			}
			
			?>
		
			<div class="clear"></div>
	</div>
	<div class="pages-content-fot"></div>