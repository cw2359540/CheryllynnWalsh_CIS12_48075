<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Displaying Errors</title>
</head>
<body>

	<h2>Testing Display Errors</h2>
	<?php # Script 8.3 - display_errors.php
	
	define('LIVE', FALSE);
	
	function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {
	
	$message = "An error occured in script '$e_file' on line $e_line: $e_message\n";
	
	$message .=print_r ($e_vars, 1);
	
	if (!LIVE) { //Development (print the error).
		echo '<pre>' .$message . "\n";
		debug_print_backtrace();
		echo '<pre><br />';
	} else { // Don't show the error.
		echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br />';
	}
	
} // End of my_error_handler() definition.

foreach ($var as $v) {}
$result = 1/0;

?>
</body>
</html>