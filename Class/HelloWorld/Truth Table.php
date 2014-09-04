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
             echo "<h1>Truth Table</h1>";
        ?>
        <table width+"200" border="1"><!--table opens-->
        
         <tr>
            <th>X</td>
            <th>Y</th>
            <th>!X</td>
            <th>!Y</th>
            <td>X&&Y</th>
            <th>X||Y</th>
            <th>X^Y</th>
            <th>X^Y^Y</th>
            <th>X^y^x</th>
            <th>!(x&&y)</th>
            <th>!X||!Y</th>
            <th>!(x||y)</th>
            <th>!X&&!y</th>
         </tr><!-- the table row is closed (</th>) after the last <td> element--><!--this is an HTML comment-->
         <?php
            $x=true;
            $y=true;
			//	PHP comment; table row needs to open for a new row to begin
            echo "<tr><td>".($x?"T":"F"). "</td>";
            echo "<td>".($y?"T":"F"). "</td>";
            echo "<td>".(!$x?"T":"F"). "</td>";
            echo "<td>".(!$y?"T":"F"). "</td>";
			echo "<td>".($x&&$y?"T":"F"). "</td>";
			echo "<td>".($x||$y?"T":"F"). "</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td></tr>";
         ?>
         <?php
            $y=false;
            echo "<tr><td>".($x?"T":"F"). "</td>";
            echo "<td>".($y?"T":"F"). "</td>";
            echo "<td>".(!$x?"T":"F"). "</td>";
            echo "<td>".(!$y?"T":"F"). "</td>";
			echo "<td>".($x&&$y?"T":"F"). "</td>";
			echo "<td>".($x||$y?"T":"F"). "</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td></tr>";
		?>
         <?php
            $x=false;
			$y=true;
            echo "<tr><td>".($x?"T":"F"). "</td>";
            echo "<td>".($y?"T":"F"). "</td>";
            echo "<td>".(!$x?"T":"F"). "</td>";
            echo "<td>".(!$y?"T":"F"). "</td>";
			echo "<td>".($x&&$y?"T":"F"). "</td>";
			echo "<td>".($x||$y?"T":"F"). "</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td></tr>";
		?>
         <?php
		 	
            $y=false;
            echo "<tr><td>".($x?"T":"F"). "</td>";
            echo "<td>".($y?"T":"F"). "</td>";
            echo "<td>".(!$x?"T":"F"). "</td>";
            echo "<td>".(!$y?"T":"F"). "</td>";
			echo "<td>".($x&&$y?"T":"F"). "</td>";
			echo "<td>".($x||$y?"T":"F"). "</td>";
			echo "<td>".($x^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$y?"T":"F"). "</td>";
			echo "<td>".($x^$y^$x?"T":"F"). "</td>";
			echo "<td>".(!($x&&$y)?"T":"F"). "</td>";
			echo "<td>".(!$x||!$y?"T":"F"). "</td>";
			echo "<td>".(!($x||$y)?"T":"F"). "</td>";
			echo "<td>".(!$x&&!$y?"T":"F"). "</td></tr>";
         ?>        
        </table><!--table needs to close-->
    </body>
</html>