<?php

function DE_score($scorede){

	if ($scorede == 5) {
		$scorede = 60;
	}elseif ($scorede == 4) {
		$scorede = 50;
	}elseif ($scorede == 3) {
		$scorede = 30;
	}elseif ($scorede == 2) {
		$scorede = 15;
	}elseif ($scorede == 1) {
		$scorede = 5;
	}/*else{
		$scorede 'invalid';
	}*/

	return $scorede;
}

?>