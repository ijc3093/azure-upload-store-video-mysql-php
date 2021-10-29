<?php

$host = "servermysqlmuseai.mysql.database.azure.com";    /* Host name */
$user = "admintest@servermysqlmuseai";         /* User */
$password = "Merciful#100";         /* Password */
$dbname = "videos";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

