<?php

// database configurations

//HOST Specifies the host name of the DB server.
define('HOST', 'localhost');

//USER Specifies the user name to connect to the data base.
define('USER', 'root');

//Defines the password to connect to the database.
define('PASS', '');

//Defines the database to connect to the database.
define('DB', 'DCSC');


//in the configuration setting above, we used the define() PHP function which is used to //create a constant in php that cannot be changed or undefined.

//connecting database
$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL database: " . $con->connect_error;
    exit();
} else {
    //echo "Connection established successfully.";
}

?>