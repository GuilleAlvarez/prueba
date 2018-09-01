<?php

/*
*
*	Script that defined the Factory to 
*	create Actions object.
*	If the type of Action isn't defined, return false.
*
*/

include_once './ActionApertura.php';
include_once './ActionClick.php';

class ActionFactory{

	const MAX_SCORE = 10;
	const MIN_SCORE = 1;

	public static function createAction($type, $id){
		switch($type){
			case ActionApertura::TIPO:
				return new ActionApertura($id, rand(ActionFactory::MIN_SCORE, ActionFactory::MAX_SCORE));
			break;
			case ActionClick::TIPO:
				return new ActionClick($id, rand(ActionFactory::MIN_SCORE, ActionFactory::MAX_SCORE));
			break;
			default:
				echo false;
		}
	}

}

?>