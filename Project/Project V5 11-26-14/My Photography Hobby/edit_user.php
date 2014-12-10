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
		<h1>My Website</h1>
		<h2>By Cheryllynn Walsh</h2>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="index.php">Home Page</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="view_users.php">View Users</a></li>
			<li><a href="password.php">Change Password</a></li>
			<li><a href="#">link five</a></li>
		</ul>
	</div>
	<div id="content">

<?php # Script 10.3 - edit_user.php
$page_title = 'Edit a User';
include ('include/header.html');

echo '<h1>Edit a User</h1'>;

	if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { 
	$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { 
	$id = $_POST['id'];
} else { 
	echo '<p class="error">This page has been accessed in error.</p>';
	include ('includes/footer.html'); 
	exit();
}

require ('../mysqli_connect.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();
	
	if (empty($_POST['first_name'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}
	
	if (empty($_POST['last_name'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}

	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}
	
	if (empty($errors)) { 
	
		$q = "SELECT user_id FROM users WHERE email='$e' AND user_id != $id";
		$r = @mysqli_query($dbc, $q);
		if (mysqli_num_rows($r) == 0) {

			$q = "UPDATE users SET first_name='$fn', last_name='$ln', email='$e' WHERE user_id=$id LIMIT 1";
			$r = @mysqli_query ($dbc, $q);
			if (mysqli_affected_rows($dbc) == 1) { 

				echo '<p>The user has been edited.</p>';	
				
			} else { 
				echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
			}
				
		} else { 
			echo '<p class="error">The email address has already been registered.</p>';
		}
		
	} else { 

		echo '<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { 
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p>';
	
	} // End of submit conditional.

} 

$q = "SELECT first_name, last_name, email FROM users WHERE user_id=$id";		
$r = @mysqli_query ($dbc, $q);

if (mysqli_num_rows($r) == 1) { 

	$row = mysqli_fetch_array ($r, MYSQLI_NUM);

	echo '<form action="edit_user.php" method="post">
<p>First Name: <input type="text" name="first_name" size="15" maxlength="15" value="' . $row[0] . '" /></p>
<p>Last Name: <input type="text" name="last_name" size="15" maxlength="30" value="' . $row[1] . '" /></p>
<p>Email Address: <input type="text" name="email" size="20" maxlength="60" value="' . $row[2] . '"  /> </p>
<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';

} else { /
	echo '<p class="error">This page has been accessed in error.</p>';
}

mysqli_close($dbc);
		
<div id="footer">
		<p>Copyright &copy; <a href="#">Plain and Simple</a> 2007 | Designed by <a href="http://www.edg3.co.uk/">edg3.co.uk</a> | Sponsored by <a href="http://www.opendesigns.org/">Open Designs</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; <a href="http://validator.w3.org/">XHTML</a></p>
	</div>

	
</body>
</html>