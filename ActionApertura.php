<?php 

/*
*
*	Script that defined the ActionApertura class.
*	ActionApertura extends Action class.
*
*/

include_once './Action.php';

class ActionApertura extends Action{

	const TIPO = 'apertura';

	public function __construct($id, $score){
		$this->id = $id;
		$this->score = $score;
	}

}

?>