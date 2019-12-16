<?php
include'db.php';
include 'j_score.php';
include 'waec.php';
include 'DE_score.php';
include 'IJMB_score.php';

if(isset($_POST['calculate'])){
	$jamb_no = $_POST['jamb_no'];
	$mode = $_POST['mode'];
//	$waec = waec($grade);
	$sitting = $_POST['sitting'];
	
	if($mode == "DE"){
		$score = $_POST['scorede'];	
		$J_score = DE_score($score);	
	}else if($mode == "utme"){ 
		 $score = $_POST['scoreu'];
		 $J_score = J_score($score);
	}else if($mode == "ijmb"){ 
		 $score = $_POST['scorei'];
		$J_score = IJMB_score($score);
	}
	/*else{
		echo "You must enter your ".$mode." Score/Grade";
	}*/
	
	
		

	
	$sql = mysql_query("INSERT INTO jamb_record (jamb_no, mode, score, olevelSitting) VALUES('$jamb_no', '$mode', '$score', '$sitting')")or die(mysql_error());
	$jamb_id = mysql_insert_id();

		$course = $_POST['course'];
		$countCourse = count($course);
		$grade ='';
		for($i=0; $i < $countCourse; $i++){
			$grade1 = $_POST['grade'];
				$sql_Course = mysql_query("INSERT INTO olevel SET jamb_id='$jamb_id', subject='$course[$i]', grade = '$grade1[$i]' ") or die(mysql_error());

				$grade += waec($grade1[$i]);
		}

if ($sitting == 1) {
		$sit = 10;
	}elseif ($sitting == 2) {
		$sit = 2;
	}

			$point = $sit + $grade + $J_score;
		
		$sqlpoint = mysql_query("UPDATE jamb_record SET point = '$point' WHERE id='$jamb_id' ") or die(mysql_error());
			echo "YOUR TOTAL POINT IS ". $point;
			echo "<br />";
			echo 'Record added! <a href=".">Go Back</a>';


}
?>