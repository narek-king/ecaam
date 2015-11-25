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

if (isset($_GET['p']) && !isset($_GET['type'])) {    $p = $_GET['p'];}
?>
<table>
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">Title eng</th>
                        <th scope="col">Date</th>
                        <th scope="col">Lang</th>
                        <th scope="col" style="width: 65px;">Modify</th>
                    </tr>
                    </thead>
                    <tbody>
<?
if (isset($p) && !isset($_GET['category'])){

 $query_about_arm = mysql_query("SELECT * FROM `$p` WHERE 1");
			while($result_about_arm = mysql_fetch_array($query_about_arm)){
			print "
			 <tr id=".$result_about_arm['id'].">
                <td class=\"align-center\">".$result_about_arm['id']."</td>
                <td class=\"align-center\">".$result_about_arm['category']."</td>
                <td class=\"align-center\">".$result_about_arm['sub_category']."</td>
                <td class=\"align-center\">".$result_about_arm['date']."</td>
                <td class=\"align-center\">Arm, Eng</td>
                <td class=\"align-center\">
                    <a href=\"admin.php?p=$p&category=".$result_about_arm['sub_category']."\" class=\"table-icon edit\" title=\"Edit\"></a>
                    
                </td>
            </tr>
			";
			}?>
 </tbody>
        </table>
<?
} elseif (isset($_GET['category'])){
    $category=mysql_real_escape_string($_GET['category']);
    $query_about_arm = mysql_query("SELECT * FROM `content` WHERE `category`='$category' ORDER BY `data` DESC");
			while($result_about_arm = mysql_fetch_array($query_about_arm)){
			print "
			 <tr id=".$result_about_arm['id'].">
                <td class=\"align-center\">".$result_about_arm['id']."</td>
                <td class=\"align-center\">".$result_about_arm['category']."</td>
                <td class=\"align-center\">".$result_about_arm['title-eng']."</td>
                <td class=\"align-center\">".$result_about_arm['data']."</td>
                <td class=\"align-center\">Arm, Eng</td>
                <td class=\"align-center\">
                    <a href=\"admin.php?type=edit&p=$p&category=".$result_about_arm['category']."&id=".$result_about_arm['id']."\" class=\"table-icon edit\" title=\"Edit\"></a>
                    <a href=\"admin.php?type=delete&id=".$result_about_arm['id']."\" class=\"table-icon delete\" id=".$result_about_arm['id']." title=\"Delete\"></a>
                </td>
            </tr>
			";
			}
 
 ?>
 </tbody>
        </table>
        <div class="entry">
			<a href="admin.php?type=add&category=<?echo $category;?>">	<button class="add">Add page</button></a>
		</div>
 <?}