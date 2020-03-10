<?php  
	include('header.php');

	$username = '';
	$pwd = '';
	$confirmPwd = '';
	$name = '';
	$email = '';

	$usernamePattern='/^\w{4,}$/i';
	$pwdPattern='/^\w{4,}$/i';
	$namePattern='/^[a-z]+( [a-z]+)*$/i';
	$emailPattern='/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i';

	$isValid = TRUE;
	$isOk = TRUE;

	if($isPost) {
		$username=$_REQUEST["username"];
		$pwd =$_REQUEST["pwd"];
		$confirmPwd =$_REQUEST["confirmPwd"];
		$name = $_REQUEST["name"];
		$email = $_REQUEST["email"];
	}

?>
		
<!-- main part -->
<div class="main">
	<div class="article">
		<div class="article-header">
			<h2>Register</h2>
		</div>
		<div class="article-body">
			<table>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username" form="registerForm" value="<?= $username ?>"/>
						<?php if ($isPost && !preg_match($usernamePattern, $username)): $isValid=false; ?>
							<span class="error">Required field.</span>	
						<?php endif ?>
						
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="pwd" form="registerForm" value="<?= $pwd ?>"/>

						<?php if ($isPost && (!preg_match($pwdPattern, $pwd) || $pwd!=$confirmPwd)): $isValid=false; ?>
							<span class="error">Required field.</span>	
						<?php endif ?>
					</td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td>
						<input type="password" name="confirmPwd" form="registerForm"/>
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>
						<input type="text" name="name" form="registerForm" value="<?= $name ?>"/>
						<?php if ($isPost && !preg_match($namePattern, $name)): $isValid=false; ?>
							<span class="error">Required field.</span>	
						<?php endif ?>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" form="registerForm" value="<?= $email ?>"/>
						<?php if ($isPost && !preg_match($emailPattern, $email)): $isValid=false; ?>
							<span class="error">Not a valid email.</span>	
						<?php endif ?>
					</td>
				</tr>
			</table>
			<?php  
				if($isPost && $isValid) {
					$isOk= $usersRepo->addUser($username, $pwd, $name, $email);
					if ($isOk) redirect('index.php');
				}
			?>
			<?php if (!$isOk): ?>
				<span class="error">This user exists in database!</span>
			<?php endif ?>
			
		</div>
		<div class="article-footer">
			<div class="article-meta">
			
			</div>
			<div class="article-actions">
				<form id="registerForm" action="register.php" method="post">
					<input type="submit" value="Sign Up">
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>