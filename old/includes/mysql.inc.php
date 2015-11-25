<?php $con = mysql_connect("localhost","avedisia_admin","{;Ltt=+IvRTd");
mysql_query('SET NAMES `utf8`');
mysql_query("set character_set_client='utf8'");
mysql_query("set character_set_results='utf8'");
mysql_query("set collation_connection='utf8_bin'");
mysql_select_db("avedisia_main") or die(mysql_error()); ?>