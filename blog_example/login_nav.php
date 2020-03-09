<?php 
	if($isPost && $action=='login') {
		$_SESSION['username'] = $_REQUEST['username'];
		$_SESSION['pwd'] = $_REQUEST['pwd'];
		$_SESSION['isAuth'] = TRUE;
		redirect('index.php');
	}
?>

<!-- login nav -->
<div class="nav">
		<div class="navitem">
			<input type="text" name="username" form="loginForm" placeholder="Username" />
		</div>
		<div class="navitem">
			<input type="password" name="pwd" form="loginForm" placeholder="Password" />
		</div>
		<div class="navitem">
			<form id="loginForm" action="index.php?action=login" method="post">
				<input type="submit" value="Login" />
			</form>
		</div>
		<div class="navitem">
			<a href="register.php" class="btn">Register</a>
		</div>
</div>

