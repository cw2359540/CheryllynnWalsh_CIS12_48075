<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Business Beads Table</title>
</head>
 	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>

 <?php
            // ECHO out a heading
             echo "<h1>Business Table</h1>";
        ?>
        <table width+"200" border="1"><!--table opens-->
        
         <tr>
            <th>Ears</th>
            <th>Necklace</th>
            <th>Rings</th>
            <th>Bracelets</th>
         </tr>
         <?php
            $Ears;
			
			//	PHP comment; table row needs to open for a new row to begin
            echo "<tr><td>".($Ears?"size":"Small")."</td>";
			echo "<td>".($Ears?"size":"Medium")."</td>";
			echo "<td>".($Ears?"size":"Large")."</td>";
			echo "<td>".($Ears?"size":"X-Large")."</td></tr>";
			
         ?>
         <?php
            $Necklace;
			echo "<tr><td>".($Necklace?"size":"Small"). "</td>";
			echo "<td>".($Necklace?"size":"Medium"). "</td>";
			echo "<td>".($Necklace?"size":"Large"). "</td>";
			echo "<td>".($Necklace?"size":"X-Large"). "</td></tr>";
		?>
         
</body>
</html>