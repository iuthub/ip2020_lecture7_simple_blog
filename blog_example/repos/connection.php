<?php
	include('users.php');
	include('posts.php');

	$db = new PDO('mysql:dbname=blog;host=localhost', 'root', 'asdasd');
	$usersRepo = new UsersRepo($db);
	$postsRepo = new PostsRepo($db);
?>