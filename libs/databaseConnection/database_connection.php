<?php

/*Define constant to connect to database */
DEFINE('DATABASE_USER', 'XXXXXXXXX');
DEFINE('DATABASE_PASSWORD', 'XXXXXXXXXXXXX');
DEFINE('DATABASE_HOST', 'xXXXXXXXXXXXXXXXXXXXXXXXXXXX');
DEFINE('DATABASE_NAME', 'XXXXXXXXXXXXXXXX');



// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME) or die ('Error'.mysql_error());
    
if (!$dbc) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>