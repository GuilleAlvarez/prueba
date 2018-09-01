<?php 

/*
*
*	Script that defined the Action class.
*	The method can't be overriding.
*	If an object is clone, the id attribute will be NULL.
*
*/

abstract class Action{

	public $id;
	public static $user = NULL;
	public $score;

	final function getId(){
		return $this->id;
	}

	final function getUser(){
		return Action::$user;
	}

	final function getScore(){
		return $this->score;
	}

	final function setId($id){
		$this->id = $id;
	}

	final function setUser($user){
		Action::$user = $user;
	}

	final function setScore($score){
		$this->score = $score;
	}

	public function __clone() {
        $this->id = NULL;
    }
}

?>