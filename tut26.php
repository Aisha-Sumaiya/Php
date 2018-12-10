<?php

	//opens connection to mysql server
	$dbc = mysql_connect('localhost','root','');

	if (!$dbc) {
		die('Not connected :' .mysql_error());
	}

	//select database
	$db_selected = mysql_select_db('game',$dbc);

	if (!$db_selected) {
		die('cant connect : ' . mysql_error());
	}

	//test
	$query = 'UPDATE game SET email = "hopethisworks" WHERE username="bucky20"';
	$result = mysql_query($query);

?>