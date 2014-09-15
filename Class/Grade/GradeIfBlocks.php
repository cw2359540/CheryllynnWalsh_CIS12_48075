<?php
/*
	Cheryllynn Walsh
	September 8, 2014
	Purpose: Illustrate Branching Constructs
*/
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Grade</title>
</head>

<body>
<?php
	//Intialize the input and declare variables
	$score =rand (50, 100);
	$grade=";
	//Determine the Grade
	if($score>=90) {
	$grade='A';
	}
	if($score>=80&&$score<90) {
	$grade='B';
	}
	if($score>=70&&$score<80 {
	$grade='C';
	}
	if($score>=60&&$score<70) {
	$grade='D';
	}
	if($score<60) {
	$grade='F';
	}
	//Output the Results
	echo "<h1>A score of $score = $grade</h1> ;
?>
</body>
</html>