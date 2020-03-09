<?php
	include('users.php');

	$db = new PDO('mysql:dbname=blog;host=localhost', 'root', 'asdasd');
	$usersRepo = new UsersRepo($db);
?>