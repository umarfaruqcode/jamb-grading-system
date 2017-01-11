<?php

		function J_score($J_score){


		if($J_score >= 0 & $J_score <= 179){
			$J_score = 0;
		}if($J_score >= 180 & $J_score <= 185){
			$J_score = 20;
		}else if($J_score >= 186 & $J_score <= 190){
			$J_score = 21;
		}else if($J_score >= 191 & $J_score <= 195){
			$J_score = 22;
		}else if($J_score >= 196 & $J_score <= 200){
			$J_score = 23;
		}else if($J_score >= 201 & $J_score <= 205){
			$J_score = 24;
		}else if($J_score >= 206 & $J_score <= 210){
			$J_score = 25;
		}else if($J_score >= 211 & $J_score <= 215){
			$J_score = 26;
		}else if($J_score >= 216 & $J_score <= 220){
			$J_score = 27;
		}else if($J_score >= 221 & $J_score <= 225){
			$J_score = 28;
		}else if($J_score >= 226 & $J_score <= 230){
			$J_score = 29;
		}else if($J_score >= 231 & $J_score <= 235){
			$J_score = 30;
		}else if($J_score >= 236 & $J_score <= 240){
			$J_score = 31;
		}else if($J_score >= 241 & $J_score <= 245){
			$J_score= 32;
		}else if($J_score >= 246 & $J_score <= 250){
			$J_score = 33;
		}

		return $J_score;
}
?>