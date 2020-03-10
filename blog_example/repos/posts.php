<?php 

class PostsRepo {
	private $db;

	private $getPostsStmt;
	private $getPostStmt;
	private $addPostStmt;
	private $updatePostStmt;
	private $deletePostStmt;

	public function __construct($db) {
		$this->db = $db;
		$this->getPostsStmt = $db->prepare('SELECT * FROM posts');
		$this->getPostStmt = $db->prepare('SELECT * FROM posts WHERE id=?');
		$this->addPostStmt = $db->prepare('INSERT INTO posts(title, body, username) VALUES(?,?,?)');
		$this->updatePostStmt = $db->prepare('UPDATE posts SET title=?, body=? WHERE id=?');
		$this->deletePostStmt = $db->prepare('DELETE posts WHERE id=?');
	}

	public getPosts() {
		$this->getPostsStmt->execute();
		return $this->getPostsStmt->fetchAll();
	}

	public getPost($id) {
		$this->getPostStmt->execute(array($id));
		return $this->getPostStmt->fetch();
	}

	public addPost($title, $body, $username) {
		$this->addPostStmt->execute(array($title, $body, $username));
	}

	public updatePost($id, $title, $body) {
		$this->updatePostStmt->execute(array($title, $body, $id));
	}	

	public deletePost($id) {
		$this->deletePostStmt->execute(array($id));
	}
}


?>