<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tTesting PCRE</title>
</head>

<body>

<?php // Script 14.2 - matches.php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$pattern = trim($_POST['pattern']);
		$subject = trim($_POST['subject']);
		
		echo "<p>The result of chekcing <br /><b>$pattern</b><br />against <br />$subject<br />is ";
	
	if (preg_match_all ($pattern, $subject, $matches) ) {
		echo 'TRUE!</p>';
		
		echo '<pre>' . print_r($matches, 1) . '</pre>';
		
	} else {
		echo 'FALSE!</p>';
	}
	
	} // End of submission IF.
	
?>

<form action="matches.php" method="post">
	<p>Regular Expression Pattern: <input type="text" name="pattern" value="<?php if (isset($pattern)) echo htmlentities($pattern); ?>" size="40" /> (include the delimiters)</p>
	<p>Test Subject: <textarea name="subject" rows="5" cols="40"><?php if (isset($subject)) echo htmlentities($subject); ?></textarea></p>
	<input type="submit" name="submit" value="Test!" />
</form>
        
</body>
</html>