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
<meta charset="utf-8">
<title>Grade/title>
</head>

<body>
<?php
	//Intialize the input and declare variables
	$scorerand (50,100);
	$grade= ' ';
	//Determine the Grade
	if($scrore>=90)$grade='A';
	if($score>=80&&$score<90)$grade='B';
	if($score>=80&&$score<80)$grade='C';
	if($score>=80&&$score<70)$grade='D';
	if($score<60)$grade='F';
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>";
?>
</body>
</html>