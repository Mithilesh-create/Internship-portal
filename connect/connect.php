<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpmyadmin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'InternshipPortal');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if ($conn == false) {
    dir('Error: Cannot connect');
}
?>