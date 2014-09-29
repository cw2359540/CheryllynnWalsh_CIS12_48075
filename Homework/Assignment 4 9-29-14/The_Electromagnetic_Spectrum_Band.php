<?php
	/*
	Cheryllynn Walsh
	September 24, 2014
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Electromagnetic Spectrum Band</title>
</head>

<body>
<?php
	//Input the data from the form
	$Number=$_GET['Number'];
?>
<?php
	// ECHO out a heading
             echo "<center><h1>The Electromagnetic Spectrum Band</h1></center>";
?>
<table width+"200" border="1" align="center">
        
         <tr>
            <td><h3 style="color:#008000"><center>Number</center></h3></td>
    		<td><h3 style="color:#008000"><center>Wavelength</center></h3></td>		
    		<td><h3 style="color:#008000"><center>Band</center></h3></td>
         </tr>
<?php
	//1-dimensional array version.
	$band = array( "Radio", "Radio","Radio","Radio","Microwave","Microwave","Microwave","Microwave", "Infrared", "Visiable", "Visiable", "Ultraviolet","Ultraviolet", "X-Ray", "X-Ray","Gamma Ray" );
	$wavelength = array();
	for( $i = 1; $i <= 16; ++$i )
		$wavelength[$i-1] = pow( 10, (4-$i) );  // = 3, 2, 1, 0, ... -16

	for( $i = 1; $i <= 16; ++$i ) {
	 	echo "<tr><td>".$i."</td><td>";
	 	echo $wavelength[$i-1]."</td><td>";
		echo $band[$i-1]."</td></tr>\n";
	}
?>
</table>

<p align="center">

<?php
	//The requested number is 
echo "The requested number is ".$Number."<br />";
echo "The wavelength is ".$wavelength[$Number-1]."<br />";
echo "The band is ".$band[$Number-1]."<br />";
?>
</p>
<br />
<center><img src="xid-8432300_1.png" /></center>
</body>
</html>