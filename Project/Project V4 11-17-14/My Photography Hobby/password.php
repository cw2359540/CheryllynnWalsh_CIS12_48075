<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $page_title; ?></title>
      	
	<link rel="stylesheet" href="file:///F|/CIS-12 PHP Dynamic Web Site Program/CheryllynnWalsh_CIS12_48075/Homework/Assignment 4 9-29-14/includes/style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<style>
* {
	border:0;
	margin:0;
	padding:0;
}

/* general */
a {
	color:black;
	text-decoration:none;
}

a:hover {
	color:yellow;
	text-decoration:none;
}

/* body */
body {
	background:	white;
	color:#555;
	font:0.8em Arial, Helvetica, "bitstream vera sans", sans-serif;
}

/* header */
#header {
	border-bottom:1px solid purple;
	height:80px;
	margin:0 auto;
	width:751px;
}
#header h1 {
	color:purple;
	font-size:300%;
	letter-spacing:-3px;
	text-align:right;
	padding:5px;
	margin-bottom:-20px;
}
#header h2 {
	color:#FF3399;
	font-size:200%;
	letter-spacing:-2px;
	text-align:right;
}

/* navigation */
#navigation {
	background:#CC66FF;
	border-right:1px solid #999;
	margin:0 auto;
	width:750px;
	height:40px;
	list-style:none;
}
#navigation li {
	border-left:1px solid black;
	float:left;
	width:149px;
	list-style:none;
}
#navigation a {
	color:black;
	display:block;
	line-height:40px;
	text-align:center;
}
#navigation a:hover {
	background:white;
	color:purple;
}
#navigation .active {
	background:black;
	color:black;
}

/* content */
#content {
	height:auto;
	margin:0 auto;
	padding:0 0 20px;
	width:751px;
}
#content h1 {
	border-bottom:1px dashed black;
	font-size:1.8em;
	padding:20px 0 0;
}
#content p {
	padding:20px 20px 0;
}

/* footer */
#footer {
	border-top:1px solid #CC66FF;
	height:50px;
	margin:0 auto;
	padding:10px;
	text-align:center;
	width:751px;
}

/* Added by Larry Ullman: */
.error, .ad {
	font-weight: bold;
	color: black
}

input, select, .input {
	padding: 5px;
	font-weight: bold;
	font-size: 1em;
	color: purple;
	background: #FFFFFF;
	border:1px dotted #004080;
	float:right;
	clear:both;
}

</style>

<body>
	<div id="header">
		<h1>My Photography Hobby</h1>
		<br />
		<h2>By Cheryllynn Walsh</h2>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="home.php">Home Page</a></li>
			<li><a href="publice_interface.php">Public Interface</a></li>
			<li><a href="member.php">Member</a></li>
            <li><a href="admin_interface.php">Admin Interface</a></li>
			<li><a href="password.php">Change Password</a></li>
            

</li>
		</ul>
	</div>
	<div id="content">
</div>

<?php # password.php

$page_title = 'Change Your Password';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../mysqli_connect.php'); 
		
	$errors = array(); 
	
	
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	
	if (empty($_POST['pass'])) {
		$errors[] = 'You forgot to enter your current password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
	}

	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your new password did not match the confirmed password.';
		} else {
			$np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your new password.';
	}
	
	if (empty($errors)) { 

		
		$q = "SELECT user_id FROM users WHERE (email='$e' AND pass=SHA1('$p') )";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		if ($num == 1) { 
	
			
			$row = mysqli_fetch_array($r, MYSQLI_NUM);

			
			$q = "UPDATE users SET pass=SHA1('$np') WHERE user_id=$row[0]";		
			$r = @mysqli_query($dbc, $q);
			
			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

				
				echo '<h1>Thank you!</h1>
				<p>Your password has been updated. In Chapter 12 you will actually be able to log in!</p><p><br /></p>';	

			} else { 

				
				echo '<h1>System Error</h1>
				<p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience.</p>'; 
	
				
				echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
	
			}

			mysqli_close($dbc); 

			
			include ('includes/footer.html'); 
			exit();
				
		} else { 
			echo '<h1>Error!</h1>
			<p class="error">The email address and password do not match those on file.</p>';
		}
		
	} else { 

		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { 
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
	
	} 

	mysqli_close($dbc);
		
} 
?>
<center><h1>Change Your Password</h1></center>
<center>
<br />
<form action="password.php" method="post">
	<table style="width:400px;text-align:left;background:#fff;border:0;">
    	<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">Email Address:</td>
			<td><input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /></td>
		</tr>
		<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">Current Password:</td>
            <td><input type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>"  /></td>
		</tr>
		<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">New Password:</td>
            <td><input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>"  /></td>
		</tr>
		<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">Confirm New Password:</td>
            <td><input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"  /></td>
		</tr>
        <tr>
        <td colspan="2">
			<input type="submit" name="submit" value="Change Password" style="margin:20px 30% 0 50%;" /></td>
	    </tr>
    </table>
</form>
</center>