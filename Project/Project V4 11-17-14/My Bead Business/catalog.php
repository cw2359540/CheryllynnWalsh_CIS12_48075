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

/*p*/
p {
    font-size: 200%;
}

/*table*/
table { 
color: #333;
font-family: Helvetica, Arial, sans-serif;
width: 640px; 
border-collapse: 
collapse; border-spacing: 0; 
}

td, th { 
border: 1px solid transparent; /* No more visible border */
height: 30px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
background: #DFDFDF;  /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;

/*span*/
span.test2 {
  width: 60px;
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
			
<?php
	// ECHO out a heading
             echo "<center><h1>Welcome Beads!</h1></center>";
?> 

<br />

            <center>
			<p>These are some of my beads photography.
            <br /> My work experience are differents the picutres gallery.</p>
            </center>
            
            <br />

<center><table>
		
		<tr>
       		<th>Earring</th>
       </tr>
       
       <tr>
       		<td>Small</td>
            <td>Medium</td>
            <td>Large</td>
       </tr>
       
       <tr>
       		<td>$5.00</td>
            <td>$5.00</td>
            <td>$10.00</td>
       </tr>
       
       <tr>
       		<th>Bracelets</th>
       </tr>
       
       <tr>
       		<td>Small</td>
            <td>Medium</td>
            <td>Large</td>
            
       <tr>
       		<td>$5.00</td>
            <td>$5.00</td>
            <td>$10.00</td>
       </tr>
       
       <tr>
       		<th>Necklace</th>
       </tr>
       
       <tr>
       		<td>Small</td>
            <td>Medium</td>
            <td>Large</td>
            <td>X-Large</td>
       </tr>
       
        <tr>
       		<td>$5.00</td>
            <td>$5.00</td>
            <td>$10.00</td>
            <td>$12.00</td>
       </tr>
       
       <tr>
       		<th>Ring</th>
       </tr>
       
       <tr>
       		<td>Small</td>
            <td>Medium</td>
            <td>Large</td>
            <td>X-Large</td>
       </tr>
       
       <tr>
       		<td>$2.00</td>
            <td>$4.00</td>
            <td>$10.00</td>
            <td>$20.00</td>
       </tr>
</tr>
</table></center>
            
	<br />
	
	<center><img src="down.php" /></center>
	
	<center>
	<span class="test2">
	  <a href="earring.php">Earring photography click me</a>
	  <em tabindex="-1">&nbsp;</em>
	</span>

<br />

<span class="test2">
	  <a href="bracelets.php">Bracelets photography click me</a>
	  <em tabindex="-1">&nbsp;</em>
	</span>
	
<br />

<span class="test2">
	  <a href="necklace.php">Necklace photography click me</a>
	  <em tabindex="-1">&nbsp;</em>
	</span>
	
<br />

<span class="test2">
	  <a href="ring.php">Ring photography click me</a>
	  <em tabindex="-1">&nbsp;</em>
	</span>
	
<br />
    
	</center>
		<div id="footer">
		<p></p></footer>
	</div>
</body>
</html>