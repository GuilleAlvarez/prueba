<?php
	
	/*
	*
	*	Script that generate the Actions of a User
	*
	*/

	include_once './User.php';
	include_once './Action.php';
	include_once './ActionApertura.php';
	include_once './ActionClick.php';
	include_once './ActionFactory.php';

	$max_actions = 10;
	$init_actions = 1;
	$sum_score = 0;
	$num_actions_apertura = 0;
	$num_actions_click = 0;

	///// main test ///////////////////
	$samurai = new User(10, 'samurai');
	Action::setUser($samurai);
	foreach (range($init_actions, $max_actions) as $number_action) {
		if($number_action <= 300){
			$action = ActionFactory::createAction(ActionClick::TIPO, $number_action);
			$num_actions_click++;
		}
		else{
			$action = ActionFactory::createAction(ActionApertura::TIPO, $number_action);
			$num_actions_apertura++;
		}
		$sum_score = $sum_score+$action->getScore();
	}
	echo "Total click actions: ".$num_actions_click."\n";
	echo "Total apertura actions: ".$num_actions_apertura."\n";
	echo "Total actions: ".($num_actions_click+$num_actions_apertura)."\n";
	echo "Total score: ".$sum_score."\n";
	///// end main test ///////////////////

	///// clone action test ///////////////////
	$clone_action = clone $action;
	echo "The id of the clone action: ".(is_null($clone_action->getId()) ? "NULL":$clone_action->getId())."\n";
	///// end main test ///////////////////


?>