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

                <div class="h_title">Main - table</div>
                <h2>Main</h2>
                <div class="entry">
                    <div class="sep"></div>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">Sub-Category</th>
                        <th scope="col">Date</th>
                        <th scope="col">Lang</th>
                        <th scope="col" style="width: 65px;">Modify</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query_main_arm = mysql_query("SELECT * FROM `news` WHERE category = 'main' AND news_category = '' AND lang = 'arm' ORDER BY `id`");
                    while($result_main_arm = mysql_fetch_array($query_main_arm)){
                        print "
			 <tr id=".$result_main_arm['id'].">
                <td class=\"align-center\">".$result_main_arm['id']."</td>
                <td class=\"align-center\">".$result_main_arm['category']."</td>
                <td class=\"align-center\">".$result_main_arm['sub_category']."</td>
                <td class=\"align-center\">".$result_main_arm['date']."</td>
                <td class=\"align-center\">Arm, Eng</td>
                <td class=\"align-center\">
                      <a href=\"/admin/view?category=".$result_main_arm['category']."&sub_category=".$result_main_arm['sub_category']."\" class=\"table-icon edit\" title=\"Edit\"></a>
                   <a href=\"/admin/delete?category=".$result_main_arm['category']."&id=".$result_main_arm['id']."\" class=\"table-icon delete\" id=".$result_main_arm['id']." title=\"Delete\"></a>
                </td>
            </tr>
			";
                    }
                    ?>

                    </tbody>
                </table>
				<div class="entry">
					<button class="add">Add page</button>
				</div>
  
