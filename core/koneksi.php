<?php
	$server	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "db_nando";

	$koneksi 	= mysql_connect($server, $user, $pass) or die (mysql_error());
	$select_db	= mysql_select_db($db, $koneksi) or die (mysql_error());
?>