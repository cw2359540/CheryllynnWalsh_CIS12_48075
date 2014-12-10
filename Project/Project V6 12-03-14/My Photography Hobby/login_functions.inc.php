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
	
<?php # Script 12.2 - login_functions.inc.php
	
	function redirect_user ($page = 'index.php') {
	
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	
	$url = rtrim($url, '/\\');
	
	$url .= '/' . $page;
	
		header("Location: $url");
		exit(); // Quit the script.
	} // End of redirect_user() function.
	
	function check_login($dbc, $email = '', $pass = '') {
	
	$error = array();
			if (empty($email)) {
				$errors[] = 'You forgot to enter your email address.';
		} else {
			$e = mysqli_real_escape_string ($dbc, trim($email));
		}
			if (empty($pass)) {
				$error[] = 'You forgot to enter your password.';
		} else {
			$p = mysqli_real_escape_string ($dbc, trim($pass));
		}
		
		if (empty($errors)) {

		$q = "SELECT user_id, first_name FROM users WHERE email='$e' AND pass=SHA1('$p')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		if (mysqli_num_rows($r) == 1) {
		
		$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
	
			return array(true, $row);
			
		} else { // Not a match!
			$errors[] = 'The email address and password entered do not match those on file.';
		}
		
		} // End of empty($errors) IF.
	
	// Return false and the errors:
	return array(false, $errors);

} // End of check_login() function.

?>
    
<div id="footer">
		<p>Copyright &copy; <a href="#">Plain and Simple</a> 2007 | Designed by <a href="http://www.edg3.co.uk/">edg3.co.uk</a> | Sponsored by <a href="http://www.opendesigns.org/">Open Designs</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; <a href="http://validator.w3.org/">XHTML</a></p>
	</div>
	
</body>
</html>