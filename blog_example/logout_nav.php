<?php
	$user = $_SESSION['user']; 
	if($isPost && $action=='logout') {
		$_SESSION['isAuth'] = false;
		redirect('index.php');
	}
?>

<!-- logout nav -->
<div class="nav">
		<div class="navitem navitem-left">
			Welcome <?= $user['name'] ?>
		</div>
		<div class="navitem">
			<a href="edit.php" class="btn">New Post</a>
		</div>
		<div class="navitem">
			<form action="index.php?action=logout" method="post">
				<input type="submit" value="Logout" />
			</form>
		</div>
	
</div>