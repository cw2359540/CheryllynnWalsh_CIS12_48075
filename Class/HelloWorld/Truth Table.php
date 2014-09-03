/*
	Cheryllynn Walsh
    Spet 3, 2014
    Purpose: Duplicatre Truth
*/    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Truth Table</title>
</head>

<body>

	<?php
	 	// ECHO out a heading
		 echo "<h1>Truth Table </h1>";
	?>
<table width+"200" border="1">

 <tr>
 	<th>X</td>
    <th>Y</th>
    <th>!X</td>
    <th>!Y</th>
    <td>X&&Y</th>
    <th>X||Y</th>
    <th>X^Y</th>
    <th>X^Y^Y</th>
    <th>!(x&&y)</th>
    <th>!X||Y!</th>
    <th>!(x||y)</th>
 </tr>
<tr> 
<tr>
 <?phpW
 	$x=true;
	$y=true;
	echo "<td>$x</td>".($x?"T":"F"). "</td>";
	echo "<td>$y</td>".($x?"T":"F"). "</td>";
	echo "<td>$y</td>".($x?"T":"F"). "</td>";
	echo "<td>$y</td>".($x&&$y?"T":"F"). "</td>";
 ?>
 </tr><tr>	
     <?php
 	$x=false;
	echo "<td>$x</td>".($x?"T":"F"). "</td>";
	echo "<td>$y</td>".($x?"T":"F"). "</td>";
	echo "<td>$y</td>".($x?"T":"F"). "</td>";
	echo "<td>$y</td>".($x&&$y?"T":"F"). "</td>";
 ?>
    
    </tr><tr>
    </tr><tr>
    </tr>tr>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
 </tr>
 <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
</body>
</html>