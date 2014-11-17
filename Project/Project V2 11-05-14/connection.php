<?php
//create a database connection
mysql_connect("localhost","your username","password") or die("Error: ".mysqlerror());
//select your database
mysql_select_db("your db");
?>
 
<html>
<body>
 
<table border=1>
  <tr>
   <th>ID</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Phone Number</th>
  </tr>
 
<?php
//create the query
$query = mysql_query("select * from `TestTable`");
 
//return the array and loop through each row
while ($row = mysql_fetch_array($query)){
 
    $id = $row['ID'];
    $fname = $row['FName'];
    $lname = $row['LName'];
    $phone = $row['PHON'];
     
?>
 
  <tr>
   <th><?php echo $id;?></th>
   <th><?php echo $fname;?></th>
   <th><?php echo $lname;?></th>
   <th><?php echo $phone;?></th>
  </tr>
   
<?php } //this ends the if?>
 
</table>
</html>