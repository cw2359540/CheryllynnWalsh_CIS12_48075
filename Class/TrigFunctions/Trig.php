<?php
/*
	Cheryllynn Walsh
	September 15, 2014
	Purpose: First for-loop
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>For Loop Table</title>
<?php
	function trigTable ($start,$stop,$step){
		//Declares 2-D array
		$trigTab=array();
		for ($col=1;$col<=5;$col++){
			$trigTabl[$col]=array();
		//Calculations for each parall aray
	for($angle=$start;$angle<=$stop;$angle+=$step) {
		//Calculate
		$trigTab[1][$angle]=$angle;
		$trigTab[2][$angle]=number_format($angle*atan(1)/45,4);
		$trigTab[3][$angle]=number_format(sin($radian[$angle]),4);
		$trigTab[4][$angle]=number_format(cos($rad[$angle]),4);
		$trigTab[5][$angle]=number_format(tan($rad[$angle]),4);
	}
	return $trigTab;
	}
	function display($str,$start,$step,$trigTab) {
			echo $str;
		for($angle=$start;$angle<=$stop;$angle+$step) {
			echo "<tr>";
		for($cols=1;$cols<=5;$cols++) {
			echo "<td>".$trigTable[$cols][$angle]."</td>";
	}
		echo "</tr>";
	};
		echo "</table>";
	}	
?>
</head>

<body>
<h1>Trig Table</h1>
<?php
	//Input the data from the form
	$angStrt=$_GET['angStrt'];
	$angEnd=$_GET['angEnd'];
	$angInc=$_GET['angInc'];
	//Declare the fill the array
	$trigTab=trigTable ($angStrt,$angEnd,$angInc); 
	//Heading for Table
	$str='<table width="200" border="1">';
	$str.="<tr>";
      $str.="<th>Degrees</th>";
      $str.="<th>Radians</th>";
      $str.="<th>Sine</th>";
      $str.="<th>Cosine</th>";
      $str.="<th>Tangent</th>";
    $str.="</tr>";
	//Display the trig Table
	display($str,$angStrt,$angEnd,$angInc,$trigTab);
?>
</body>
</html>