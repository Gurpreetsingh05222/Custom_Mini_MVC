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

			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id" => $row['id'], 
					"name" => $row['name'],
					"email" => $row['email']
			);
				header('Location: '. ROOT_URL. 'shares');
			}else{
				echo 'incorect login';
			}
		}
		return;
	}
}