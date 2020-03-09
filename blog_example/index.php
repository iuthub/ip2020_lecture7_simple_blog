<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>My Simple Blog</title>
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
	<div class="container">
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

		<!-- logout nav -->
		<div class="nav">
			
				<div class="navitem">
					<a href="edit.php" class="btn">New Post</a>
				</div>
				<div class="navitem">
					<form action="index.php?action=logout" method="post">
						<input type="submit" value="Logout" />
					</form>
				</div>
			
		</div>

		<div class="main">
			<div class="article">
				<div class="article-header">
					<h2>Title</h2>
				</div>
				<div class="article-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nisi beatae praesentium quia temporibus aliquid facere expedita sint, molestias hic illo harum aspernatur sequi repudiandae doloremque tenetur, veritatis animi doloribus!
				</div>
				<div class="article-footer">
					<div class="article-meta">
						Edit: date
					</div>
					<div class="article-actions">
						<a href="edit.php?id=">Edit</a> | 
						<a href="delete.php?id=">Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>