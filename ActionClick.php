<?php 

/*
*
*	Script that defined the ActionClick class.
*	ActionClick extends Action class.
*
*/

include_once './Action.php';

class ActionClick extends Action{

	const TIPO = 'click';

	public function __construct($id, $score){
		$this->id = $id;
		$this->score = $score;
	}

}

?>