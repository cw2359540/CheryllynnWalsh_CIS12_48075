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
</head>

<body>
<h1>Trig Table</h1>
<?php
	//Input the data from the form
	$angStrt=$_GET['angStrt'];
	$angEnd=$_GET['angEnd'];
	$angInc=$_GET['angInc'];
	
	//Declare the arrays
	$degree=array();
	$radians=array();
	$sine=array();
	$costine=array();
	$tangent=array();
	
	//Calculations for each parall arays
	for($angle=$angStrt;$angle<=$angEnd;$angle+=$angInc) {
		
	//Calculate
	$degree[$angle]=$angle;
	$radian[$angle]=number_format($angle*atan(1)/45,4);
	$sine[$angle]=number_format(sin($radian[$angle]),4);
	$cosine[$angle]=number_format(cos($rad[$angle]),4);
	$tangent[$angle]=number_format(tan($rad[$angle]),4);
	};
?>
<table width="200" border="1">
    <tr>
      <th>Degrees</th>
      <th>Radians</th>
      <th>Sine</th>
      <th>Cosine</th>
      <th>Tangent</th>
    </tr>
<?php
	//For- Loop
	for($angle=$angStrt;$angle<=$angEnd;$angle+=$angInc) {
		echo "<tr>";
		echo "<td>".$degree[$angle]."</td>";
		echo "<td>".$radian[$angle]."</td>";
		echo "<td>".$sine[$angle]."</td>";
		echo "<td>".$cosine[$angle]."</td>";
		echo "<td>".$tangent[$angle]."</td>";
		echo "</tr>";
	};
?>
</table>
<?php
	echo "<p>The number of elements in the columns are".count($degree)."</p>";
?>
</body>
</html>