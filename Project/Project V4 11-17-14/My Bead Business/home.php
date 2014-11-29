<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $page_title; ?></title>
      	
	<link rel="stylesheet" href="file:///F|/CIS-12 PHP Dynamic Web Site Program/CheryllynnWalsh_CIS12_48075/Project/Project V4 11-17-14/My Bead Business/includes/style.css" type="text/css" media="screen" />
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
	color:black;
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
	border-bottom:1px solid black;
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
	border-right:1px solid black;
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
	background: white;
	height:auto;
	margin:0 auto;
	padding:0 0 20px;
	width:751px;
}
#content h1 {
	border-bottom:2px dashed purple;
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
}

p {
    font-size: 150%;
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
	
<h1>Welcome Beads!</h1>
			
			<p>Hello everyone!</p>

			<p>This is the web site for you if you like bead jewelry.  You can see some earrings, bracelets, and necklaces to buy.
			You can also see some instructions to make your own necklace, bracelet, and ring.</p>
			
			<p>I hope you enjoy to see this web site.</p>
		<br />
		
		<?php
	// ECHO out a heading
             echo "<center><h1>Member Login</h1></center>";
?> 

<br />
<center><form action="password.php" method="post">
	<table style="width:400px;text-align:left;background:#fff;border:0;">
    	<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">Email Address:</td>
			<td><input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /></td>
		</tr>
		<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">Password:</td>
            <td><input type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>"  /></td>
		</tr>
        <tr>
		<input type="submit">
		</tr>
    </table>
</center>
	
	<?php
	// ECHO out a heading
             echo "<center><h1>Admin Login</h1></center>";
?> 


<center><form action="password.php" method="post">
	<table style="width:400px;text-align:left;background:#fff;border:0;">
    	<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">Email Address:</td>
			<td><input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /></td>
		</tr>
		<tr style="height:20px;">
			<td style="height:12px;float:left;vertical-align:center;">Current Password:</td>
            <td><input type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>"  /></td>
		</tr>
        <tr>
		<input type="submit">
		</tr>
    </table>
</center>

</form>

<div id="footer">
		
	</div>
</body>
</html>