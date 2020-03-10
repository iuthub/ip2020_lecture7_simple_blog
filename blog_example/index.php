<?php  
	include('header.php');
?>
		
<!-- main part -->
<div class="main">

	<?php foreach ($postsRepo->getPosts() as $post): ?>
		<div class="article">
			<div class="article-header">
				<h2><?= $post['title'] ?></h2>
			</div>
			<div class="article-body">
				<?= $post['body'] ?>
			</div>
			<div class="article-footer">
				<div class="article-meta">
					Edit: <?= $post['postDate'] ?>, Author: <?= $post['username'] ?>
				</div>
				<div class="article-actions">
				<?php if ($_SESSION['isAuth']): ?>
					<a href="edit.php?id=<?=$post['id']?>">Edit</a> | 
					<a href="delete.php?id=<?=$post['id']?>">Delete</a>
				<?php endif ?>

					
				</div>
			</div>
		</div>
	<?php endforeach ?>

	
</div>

<?php include('footer.php'); ?>
	