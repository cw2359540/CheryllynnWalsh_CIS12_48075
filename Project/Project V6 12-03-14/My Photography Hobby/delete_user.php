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
	<div id="content">

<?php # Script 10.2 - delete_user.php
// This page is for deleting a user record.
// This page is accessed through view_users.php.

$page_title = 'Delete a User';
include ('includes/header.html');
echo '<h1>Delete a User</h1>';

// Check for a valid user ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_users.php
	$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
	$id = $_POST['id'];
} else { // No valid ID, kill the script.
	echo '<p class="error">This page has been accessed in error.</p>';
	include ('includes/footer.html'); 
	exit();
}

require ('../mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['sure'] == 'Yes') { // Delete the record.

		// Make the query:
		$q = "DELETE FROM users WHERE user_id=$id LIMIT 1";		
		$r = @mysqli_query ($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

			// Print a message:
			echo '<p>The user has been deleted.</p>';	

		} else { // If the query did not run OK.
			echo '<p class="error">The user could not be deleted due to a system error.</p>'; // Public message.
			echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
		}
	
	} else { // No confirmation of deletion.
		echo '<p>The user has NOT been deleted.</p>';	
	}

} else { // Show the form.

	// Retrieve the user's information:
	$q = "SELECT CONCAT(last_name, ', ', first_name) FROM users WHERE user_id=$id";
	$r = @mysqli_query ($dbc, $q);

	if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.

		// Get the user's information:
		$row = mysqli_fetch_array ($r, MYSQLI_NUM);
		
		// Display the record being deleted:
		echo "<h3>Name: $row[0]</h3>
		Are you sure you want to delete this user?";
		
		// Create the form:
		echo '<form action="delete_user.php" method="post">
	<input type="radio" name="sure" value="Yes" /> Yes 
	<input type="radio" name="sure" value="No" checked="checked" /> No
	<input type="submit" name="submit" value="Submit" />
	<input type="hidden" name="id" value="' . $id . '" />
	</form>';
	
	} else { // Not a valid user ID.
		echo '<p class="error">This page has been accessed in error.</p>';
	}

} // End of the main submission conditional.

mysqli_close($dbc);
		
include ('includes/footer.html');
?>