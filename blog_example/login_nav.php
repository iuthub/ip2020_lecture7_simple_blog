<?php
	$isFailedLogin = false; 
	if($isPost && $action=='login') {
		$username = $_REQUEST['username'];
		$pwd = $_REQUEST['pwd'];

		if ($usersRepo->checkUser($username, $pwd)) {
			$_SESSION['user'] = $usersRepo->getUser($username);
			$_SESSION['isAuth'] = TRUE;
			redirect('index.php');			
		} else {
			$isFailedLogin = true;
		}
	}
?>

<!-- login nav -->
<div class="nav">
		<div class="navitem">
			<?php if ($isFailedLogin): ?>
				<span class="error">Incorrect login or password.</span>
			<?php endif ?>
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

