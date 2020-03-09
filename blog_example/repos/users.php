<?php 

class User {
	public $username;
	public $pwd;
	public $name;
	public $email;


	public function loadRow($row) {
		$this->username = $row['username'];
		$this->pwd = $row['pwd'];
		$this->name = $row['name'];
		$this->email = $row['email'];
	}

	public function loadParams($username, $pwd, $name, $email) {
		$this->username = $username;
		$this->pwd = $pwd;
		$this->name = $name;
		$this->email = $email;
	}
}

class UsersRepo {
	private $db;

	private $getUserStmt;
	private $addUserStmt;

	public function __construct($db) {
		$this->db = $db;
		$this->getUserStmt = $db->prepare('SELECT * FROM users WHERE username=?');
		$this->addUserStmt = $db->prepare('INSERT users(username, pwd, name, email) VALUES(?,?,?,?)');
	}

	public function getUser($username) {
		$this->getUserStmt->execute(array($username));
		if($this->getUserStmt->rowCount()>0) {
			$user = new User(); 
			$user->loadRow($this->getUserStmt->fetch());
			return $user;
		}
		return NULL;
	}

	public function addUser($user) {
		if (!$this->getUser($user->username)) {
			$this->addUserStmt->execute(array(
				$user->username,
				$user->pwd,
				$user->name,
				$user->email,				
			));
			return true;
		}
		return false;
	}
}


?>