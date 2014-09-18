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
	// forfor($angle=$angStrt;$angle<=$angEnd;$angle+=$angInc) {
	$angle=$angeStrt;
	while($angle<=$angEnd) {
		echo "<tr>";
		echo "<td>$angle</td>";
		//Calculate
		$rad=number_format($angle*atan(1)/45,4);
		$sine=number_format(sin($rad),4);
		$cosine=number_format(cos($rad),4);
		$tangent=number_format(tan($rad),4);
		echo "<td>$rad</td>";
		echo "<td>$sine</td>";
		echo "<td>$cosine</td>";
		echo "<td>$tangent</td>";
		echo "</tr>";
		$angle+=$angInc;
	}
?>
</table>
</body>
</html>