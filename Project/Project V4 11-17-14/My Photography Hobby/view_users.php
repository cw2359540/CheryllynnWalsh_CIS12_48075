<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $page_title; ?></title>
      	
	<link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<style>

/*body*/
body {
	background-image: url(photography-camera-nikon-pictures-4.jpg); 
	background-size: cover;
	background-repeat: repeat-y;
	font-size: 220%;
	background-color: white;
	Color: black;
	font: 0.8em Arial, Helvetica, "bitstream vera sans", sans-serif;
}

/*navigation*/

#navigation .content {
    border: #48f solid 3px;
    clear: left;
    padding: 1em;
}

#navigation ul {
    height: 2em;
    list-style: none;
    margin: 0;
    padding: 0;	
}

#navigation ul li a {
    background: #EBC299; /* url(tabs.gif);*/
    color: #008;
    display: block;
    float: left;
    height: 1.5em;
    padding-left: 40px;
    text-decoration: none;
	width:130px;
}

#navigation li {
	border-left: 1px solid black:
    float: left;
   	margin: 0 1px 0 0;
}

#navigation a:hover {
    background-color: #F5E0CC;
    background-position: 0 -120px;
}

#navigation a:hover span {
    background-position: 100% -120px;
}

#navigation li.current a {
    background-color: #48f;
    background-position: 0 -60px;
    color: #fff;
    font-weight: bold;
}

#navigation li.current span {
    background-position: 100% -60px;
}

#navigation span {
    background: url(tabs.gif) 100% 0;
    display: block;
    line-height: 2em;
    padding-right: 10px;
}

#navigation {
	margin:0 0 0 190px;
}

/*header*/
#header {
	border-bottom: 1px solid black;
	background:#CC6600;
	height:80px;
	margin: 0 auto;
	width:751px;
}

#header h1	{
	color: black;
	font-size: 300%;
	letter-spacing: -3px;
	text-align:center;
	padding:5px;
	margin-bottom: -20px;
}

#header h2	{
	color: black;
	font-size: 160%;
	letter-spacing: -1px;
	text-align:center;
}

/*content*/
#content	{
	background: #EBC299;
}

#content h1 {
	border-style: solid;
    border-bottom-width: 15px;
	font-size:1.8em;
	padding:20px 0 0;
}

#content p {
	padding:20px 20px 0;
	text-align: center;
	font-size: 18px;
}

/*footer*/
#footer	{
	border-top: 2px solid black;
	height: 50px;
	margin: 0 auto;
	padding: 10 px;
	width: 751 px;
	text-align:center;
	background:#CC6600;
	font-size: 15px;
}

</style>


<body>
	<div id="header">
		<h1>My Photography Hobby</h1>
		<h2>By Cheryllynn Walsh</h2>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="home.php">Home Page</a></li>
			<li><a href="publice_interface.php">Public Interface</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="member.php">Member</a></li>
            <li><a href="admin_interface.php">Admin Interface</a></li>
			<li><a href="password.php">Change Password</a></li>
            

</li>
		</ul>
	</div>
	<div id="content"

<?php # Script 10.5 - #5
// This script retrieves all the records from the users table.
// This new version allows the results to be sorted in different ways.

$page_title = 'View the Current Users';
include ('includes/header.html');
echo '<h1>Registered Users</h1>';

require ('../mysqli_connect.php');

// Number of records to show per page:
$display = 10;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(user_id) FROM users";
	$r = @mysqli_query ($dbc, $q);
	$row = @mysqli_fetch_array ($r, MYSQLI_NUM);
	$records = $row[0];
	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}
} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}

// Determine the sort...
// Default is by registration date.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';

// Determine the sorting order:
switch ($sort) {
	case 'ln':
		$order_by = 'last_name ASC';
		break;
	case 'fn':
		$order_by = 'first_name ASC';
		break;
	case 'rd':
		$order_by = 'registration_date ASC';
		break;
	default:
		$order_by = 'registration_date ASC';
		$sort = 'rd';
		break;
}
	
// Define the query:
$q = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, user_id FROM users ORDER BY $order_by LIMIT $start, $display";		
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b>Edit</b></td>
	<td align="left"><b>Delete</b></td>
	<td align="left"><b><a href="view_users.php?sort=ln">Last Name</a></b></td>
	<td align="left"><b><a href="view_users.php?sort=fn">First Name</a></b></td>
	<td align="left"><b><a href="view_users.php?sort=rd">Date Registered</a></b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee'; 
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left"><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
		<td align="left"><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
		<td align="left">' . $row['last_name'] . '</td>
		<td align="left">' . $row['first_name'] . '</td>
		<td align="left">' . $row['dr'] . '</td>
	</tr>
	';
} // End of WHILE loop.

echo '</table>';
mysqli_free_result ($r);
mysqli_close($dbc);

// Make the links to other pages, if necessary.
if ($pages > 1) {
	
	echo '<br /><p>';
	$current_page = ($start/$display) + 1;
	
	// If it's not the first page, make a Previous button:
	if ($current_page != 1) {
		echo '<a href="view_users.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	
	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="view_users.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.
	
	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="view_users.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	
	echo '</p>'; // Close the paragraph.
	
} // End of links section.
	

?>