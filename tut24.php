<?php

	//opens connection to mysql server
	$dbc = mysql_connect('localhost','root','');

	if (!$dbc) {
		die('Not connected':.mysql_error());
	}

?>