<?php

	define('DB_NAME', 'thinkTank');
	define('DB_USER', 'bedlam');
	define('DB_PASSWORD', 'blackdog');
	define('DB_HOST', 'localhost');
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
	$db_selected = mysql_select_db(DB_NAME, $link);
		if (!$db_selected) {
			die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
		}
	$value = rawurlencode($_POST['input1']);
	$sql = "INSERT INTO demo (input1) VALUES ('$value')";
		if (!mysql_query($sql)) {
			die('Error: ' . mysql_error());
		}
	mysql_close();
//------------------------------------------------------- buildMe ------
	echo "Very good yes very good";
	$result = mysql_query("SELECT * FROM demo (input1) ORDER BY RAND() LIMIT 0,4;");
	$row = mysql_fetch_array($result);
	echo $row['businessname'];
?>