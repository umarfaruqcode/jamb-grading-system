<?php

function waec($grade)
{
	if ($grade == 'A' ) {
		$grade = 6;
	}elseif ($grade == 'B') {
		$grade = 4;
	}elseif ($grade == 'C') {
		$grade = 3;
	}elseif ($grade == 'D') {
		$grade = 2;
	}elseif ($grade == 'E') {
		$grade = 1;
	}elseif ($grade == 'F') {
		$grade = 0;
	}
	return $grade;
}

?>