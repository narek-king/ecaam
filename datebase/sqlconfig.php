<?php  $con = mysql_connect("localhost","root","");
mysql_query('SET NAMES `utf8`');
mysql_query("set character_set_client='utf8'");
mysql_query("set character_set_results='utf8'");
mysql_query("set collation_connection='utf8_bin'");
mysql_select_db("ecaam") or die(mysql_error());


//$db = new PDO('mysql:host=localhost; dbname=ecaam; charset=utf8', 'root', '');
