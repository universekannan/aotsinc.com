<?php
/*
---------------------------------------------------------
Holds info for connecting to the db, and some other vars
Coded By: Alpha Omega Tech Solutions Inc.
---------------------------------------------------------
*/
	$str_data_base_host_name = 'localhost';
	$str_data_base_user_name = 'root';
	$str_data_base_password = '';
	$db_tc_admin = 'aots';

//	$str_data_base_host_name = 'tcimain.db.4588490.hostedresource.com';
//	$str_data_base_user_name = 'tcimain';
//	$str_data_base_password = 'AlphaOmega-1';
//	$db_tc_admin = 'tcimain';


	$conn_tc_article = mysql_connect($str_data_base_host_name, $str_data_base_user_name, $str_data_base_password) or die  ('Error connecting to Tamil Christian article MYSQL');

	mysql_set_charset('utf8',$conn_tc_article);

	mysql_select_db($db_tc_admin) or die ('Error:------------------------- '.mysql_error ());
?>