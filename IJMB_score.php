<?php

function IJMB_score($ijmbscore){

		if($ijmbscore ==
		 15){
			$ijmbscore=60;
		}else if($ijmbscore == 14){
			$ijmbscore = 55;
		}else if($ijmbscore == 13){
			$ijmbscore = 51;
		}else if($ijmbscore == 12){
			$ijmbscore = 47;
		}else if($ijmbscore == 11){
			$ijmbscore = 43;
		}else if($ijmbscore == 10){
			$ijmbscore = 39;
		}else if($ijmbscore == 9){
			$ijmbscore = 35;
		}else if($ijmbscore == 8){
			$ijmbscore = 31;
		}else if($ijmbscore == 7){
			$ijmbscore = 27;
		}else if($ijmbscore == 6){
			$ijmbscore = 23;
		}else if($ijmbscore == 5){
			$ijmbscore = 19;
		}else if($ijmbscore == 4){
			$ijmbscore = 15;
		}else if($ijmbscore == 3){
			$ijmbscore = 11;
		}else if($ijmbscore == 2){
			$ijmbscore = 7;
		}else if($ijmbscore == 1){
			$ijmbscore = 3;
		}else{
			$ijmbscore =0;
		}

	return $ijmbscore;
}

?>