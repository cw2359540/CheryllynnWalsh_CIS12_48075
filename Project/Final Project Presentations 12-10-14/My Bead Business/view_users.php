<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $page_title; ?></title>
      	
	<link rel="stylesheet" href="file:///F|/CIS-12 PHP Dynamic Web Site Program/CheryllynnWalsh_CIS12_48075/Project/Project V4 11-17-14/My Bead Business/includes/style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<style>

/*body*/

body {
	background-image: url(perolas.jpg); 
	font-size: 220%;
	background-color: white;
	Color: black;
	font: 0.8em Arial, Helvetica, "bitstream vera sans", sans-serif;
}

/*header*/
#header {
	height:130px;
	background:#9999FF;
	border:1px solid #CCC;
	width:960px;
	margin:0px auto;
}

#header h1	{
	color: purple;
	font-size: 300%;
	text-align:center;
	margin-bottom: -20px;
}

#header h2 {
	color: white;
	font-size: 200%;
	text-align: center;
}

/*h1-h10*/

h1	{
	color: purple;
	font-size: 300%;
}

/*p*/
p {
    font-size: 20px;
}

/*navigation*/
#navigation	{
	float: center;
    padding: 0px;
    width: 180px;
    font-size: 18px;
    font-family: Arial;
	background: #9999FF;
	
}

#navigation	li	{
	border-left: 2px solid black;
	float: center;
	width: 149px;
	list-style: none;
}

#navigation	{
	border-left: 5px solid purple;
	float: right;
}

#navigation a {
	color:black;
	displau: block;
	line-height: 40px;
	text-align: center;
}

#navigation a:hover {
		background: purple;
		color: #9999FF;
}


/*content*/
#content	{
	background: #9999FF;
	height:auto;
	margin: 10px auto;
	padding: 0 0 20px;
	width: 751px;
}

#content h1	{
	border-bottom: 2px dashed black;
	font-sixe: 1.5em;
	padding: 20px 0 0;
}

#content {
	text-align: center;
}

/*footer*/
#footer	{
	border-top: 2px solid black;
	height: 50px;
	margin: 0 auto;
	padding: 10 px;
	width: 751 px;
}

/*Added*/
.error, .ad	{
	font-weight: bold;
	color: black;
}

input, select, .input	{
	padding: 5px;
	font-weight: bold;
	font-size: 1em;
	color: purple;
	background: #FFFFFF;
	border: 1px dotted #004080;
}


</style>


<body>
	<div id="header">
		<h1>Beads For You</h1>
		<br />
		<h2>By Cheryllynn Walsh</h2>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="home.php">Home Page</a></li>
			<li><a href="catalog.php">Gallery/Catalog</a></li>
			<li><a href="diy.php">Do-It-Yourself</a></li>
            <li><a href="buy.php">Purchase</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
            

</li>
		</ul>
	</div>
	<div id="content">
    
<?php # Script 10.1 - view_users.php #3

	$page_title = 'View the Current Users';
	include ('includes/header.html');
	echo '<h1>Registered Users</h1>';

	require ('../mysqli_connect.php');
		
	// Define the query:
	$q = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%M %d, %Y') 
	AS dr, user_id FROM users ORDER BY 	registration_date ASC";		
	$r = @mysqli_query ($dbc, $q);

	// Count the number of returned rows:
	$num = mysqli_num_rows($r);
	
	if ($num > 0) { // If it ran OK, display the records.

	// Print how many users there are:
	echo "<p>There are currently $num registered users.</p>\n";

	// Table header:
	echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr>
		<td align="left"><b>Edit</b></td>
		<td align="left"><b>Delete</b></td>
		<td align="left"><b>Last Name</b></td>
		<td align="left"><b>First Name</b></td>
		<td align="left"><b>Date Registered</b></td>
	</tr>
';
	
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr>
			<td align="left"><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
			<td align="left"><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
			<td align="left">' . $row['last_name'] . '</td>
			<td align="left">' . $row['first_name'] . '</td>
			<td align="left">' . $row['dr'] . '</td>
		</tr>
		';
	}

	echo '</table>';
	mysqli_free_result ($r);	

} else { // If no records were returned.
	echo '<p class="error">There are currently no registered users.</p>';
}

mysqli_close($dbc);

?>

<div id="footer">
	</div>

	
</body>
</html>