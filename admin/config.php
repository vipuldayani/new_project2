<?php
	define('DB_SERVER', "localhost");
	define('DB_USER', "root");
	define('DB_PASS', "");
	define('DB_DATABASE', "new_project2");
	$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
        session_start();
?>