<?php
class UserModel extends Model{
	public function register(){
		
		//Sanitize
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			//SELECT * FROM users WHERE email = :email AND password = :pas
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();

			if($this->lastInsertId()){
				header('Location: '. ROOT_URL. 'users/login');
			}
		}
		return;
	}

	public function login(){
			//Sanitize
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			//Compare
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();

			if($this->lastInsertId()){
				header('Location: '. ROOT_URL. 'users/login');
			}
		}
		return;
	}
}