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
	switch($score>=90){
		case true:$grade='A'; break;
		default:
			switch($score>=80){
				case true:$grade='B';break;
				default:
					switch($score>=70){
						case true:$grade='C';break;
						default:
							switch($score>=60){
								case true:$grade='D';break;
								default:$grade='F';
							}
					}
			}
	}
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>";
?>
</body>
</html>