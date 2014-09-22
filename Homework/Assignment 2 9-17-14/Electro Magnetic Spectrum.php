<?php
/*
	Cheryllynn Walsh
	September 16, 2014
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Electro Magnetic Spectrum</title>
</head>

<body>
<h1>The Electromagnetic Spectrum</h1>

<?php
	//Input the data from the form
	$wave=$_GET['wave'];

	//Determine
	if ($wave>= 1e3) {
		echo "Radio";
		
	} else if ($wave<= 1e-2 && $wave> 1e-4){
		echo "Microwave"; 
			
	} else if ($wave<= 1e-4 && $wave > 1e-6){
		echo "Infrared"; 
			
	} else if ($wave<= 1e-6 && $wave > 1e-8){
		echo "Visiable"; 
			
	} else if ($wave<= 1e-8 && $wave > 1e-9){
		echo "Ultraviolet"; 
			
	} else if ($wave<= 1e-9 && $wave > 1e-10){
		echo "X-Ray"; 
			
	} else if ($wave<= 1e-10 && $wave > 1e-10){
		echo "Gamma Ray"; 
	
	} else {
		echo "Please enter an integer"; 
	}
	
	//Output the results 
	//echo "<h1>A wave of $wave = $band </h1>";
	
?>
</table>
</body>
</html>