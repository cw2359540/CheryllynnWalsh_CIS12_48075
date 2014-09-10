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
	$score=rand(50,100);
	$grade= ' ';
	//Determine the Grade
	switch(true){
		case $score>=90:$grade='A';break;
		case $score>=80:$grade='B';break;
		case $score>=70:$grade='C';break;
		case $score>=60:$grade='D';break;
		default:		$grade='F';
	}
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>";
?>
</body>
</html>