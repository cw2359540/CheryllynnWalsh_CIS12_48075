<!--?php
/*
	Cheryllynn Walsh
    October 2, 2014
*/
?-->
<!--doctype html-->
<html>
<head>
<!--meta charset="utf-8"-->
<title>Bank Deposit</title>
</head>
<body>



<?php
	$interest = array (0.05, 0.06, 0.07, 0.08 ,0.09, 0.10);
	$deposit = array ();
	
for ($i = 0; $i < 6; ++$i ) {
	$deposit[$i] = array();
	$deposit[0][$i] = 100;
}

for ( $year = 1; $year <= 10; ++$year ) {
	for ( $i = 0; $i < 6; ++$i )
		$deposit[$year][$i] = $deposit[$year-1][$i] * (1 + $interest[$i]);
}
?>

<center><h1>Bank Deposit</center></h1>

<center>
<table border = "1" style="font-size: 20pt; text-align: center;">
<tr><th>Year</th>

<?php
for ($i = 0; $i < 6; ++$i) {
	echo "<th>" . ($interest[$i] * 100) . "%</th>";
}
	echo "</tr>";
for ($year = 1; $year <= 10; ++$year ) {
	echo "<tr>";
	echo "<td>".$year."</td>";
	for ($i = 0; $i < 6; ++$i ) {
		$val = number_format ($deposit[$year][$i], 2, '.', '' );
		echo "<td>".$val."</td>";
}
	echo "</tr>";
}

?>

</table>

</center>

</body>
</html>