<?php # mysqli_connect.php

	//Yorkies and Biwere yorkies Puppies
DEFINE ('DB_USER', 'username');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'sitename');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die 
('Could not connect to MySQL: ' . mysqli_connect_error() );

mysqli_set_charset($dbc, 'utf8');