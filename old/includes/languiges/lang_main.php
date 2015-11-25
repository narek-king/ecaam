<?php

session_start();

if (isset($_GET['lang'])){
    $lang=$_GET['lang'];
    $_SESSION['lang']=$lang;
    setcookie('lang', $lang, time()+(3600*24*30));
}
elseif (isset($_SESSION['lang'])){
    $lang=$_SESSION['lang'];
    
}
else if (isset($_COOKIE['lang'])){
    $lang=$_COOKIE['lang'];
}
else {
    $lang="am";
}
switch($lang){
    case 'eng': 
    $lang_file='lang.eng.php';
    break;
     case 'am':
    $lang_file='lang.am.php';
    break;
    default:
    $lang_file='lang.am.php';
}
include_once ($lang_file);
?>