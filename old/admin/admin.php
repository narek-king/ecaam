<?php 
@session_start();
/* 
 *  This is the main page.
 *  This page includes the configuration file, 
 *  the templates, and any content-specific modules.
 */

// Require the configuration file before any PHP code:
require('../includes/config.inc.php');
if(isset($_SESSION['user']))
{
	

//Include languige


// Validate what page to show:
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
    $p = $_POST['p'];
} else {
    $p = NULL;
}
if (isset($_GET['o'])) {
    $o = $_GET['o'];
} elseif (isset($_POST['o'])) { // Forms
    $o = $_POST['o'];
} else {
    $o = NULL;
}

// Determine what page to display:
/*switch ($p) {
//
    case 'about':
        $page = 'pages.inc.php';
        $page_title = 'Մեր մասին/'.'ADMIN PANEL';
        $about='active';
        break;
        
    // Default is to include the main page.
    default:
        $page = 'main.inc.php';
        $page_title = 'Գլխավոր/'.'ADMIN PANEL';;
        $home='active';
        break;
        
} // End of main switch.*/

if (isset($p) && !isset($_GET['type'])) {
    $page = 'pages.inc.php';
} elseif (isset($o)){
     $page = 'other.inc.php';
}elseif (isset($_GET['type'])){
     $page = 'form.inc.php';
} else { $page = 'main.inc.php';}

// Make sure the file exists:
if (!file_exists('modules/' . $page)) {
    $page = 'main.inc.php';
    $page_title = 'Գլխավոր/'.'ADMIN PANEL';
}

// Include the header file:
include('includes/header.html');

// Include the content-specific module:
// $page is determined from the above switch.
include('modules/' . $page);

// Include the footer file to complete the template:
include('includes/footer.html');
}
else {
    echo 'hajox';
header("Location: index.php");
}
?>
   