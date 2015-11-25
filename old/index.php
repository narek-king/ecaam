<?php 

/* 
 *  This is the main page.
 *  This page includes the configuration file, 
 *  the templates, and any content-specific modules.
 */
session_start(); // this is for languages now
// Require the configuration file before any PHP code:
require('includes/config.inc.php');
require('classes/controler.php');

// Validate what page to show:
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
    $p = $_POST['p'];
} else {
    $p = NULL;
}
$request = new controler($p);

//header( 'Location: http://yandex.ru/yandsearch?text=redirect', true, 301 );


// Determine what page to display:
/*switch ($p) {
//
    case 'about':
        $page = 'pages.inc.php';
        $page_title = $langu['MENUE_ABOUT'].'|'.$langu['PAGE_TITLE'];
        $about='active';
        break;
    case 'history':
        $page = 'pages.inc.php';
        $page_title = $langu['MENUE_ABOUT_HISTORY'].'|'.$langu['PAGE_TITLE'];
        $about='active';
        break;
        
     
    
    // Default is to include the main page.
    default:
        $page = 'main.inc.php';
        $page_title = $langu['MENUE_HOME'].'|'.$langu['PAGE_TITLE'];
        $home='active';
        break;
        
} // End of main switch.*/

if (isset($p) and $p!='dprocashinutyun' and $p!='site_map'){
    $page = 'pages.inc.php';
    $page_title = $langu['PAGE_TITLE'];
}
elseif (isset($p) and $p=='dprocashinutyun' and $p!='site_map'){
    $page = 'dprocashinutyun.inc.php';
    $page_title = $langu['PAGE_TITLE'];
}
elseif (isset($p) and $p!='dprocashinutyun' and $p=='site_map'){
    $page = 'site_map.inc.php';
    $page_title = $langu['PAGE_TITLE'];
}
else{
    $page = 'main.inc.php';
    $page_title = $langu['PAGE_TITLE'];
}

// Make sure the file exists:
if (!file_exists('modules/' . $page)) {
    $page = 'main.inc.php';
    $page_title = $langu['MENUE_HOME'].'||'.$langu['PAGE_TITLE'];
}

// Include the header file:
include('includes/header.html');

// Include the content-specific module:
// $page is determined from the above switch.
include('modules/' . $page);

// Include the footer file to complete the template:
include('includes/footer.html');

?>