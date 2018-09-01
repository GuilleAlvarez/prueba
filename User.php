<?php

/*
*
*	Script that defined the User class.
*
*/

class User{

	private $id;
	private $username;

	public function __construct($id, $username){
		$this->id = $id;
		$this->username = $username;
	}

	public function getUsername(){
		return $this->username;		
	}

}

?>