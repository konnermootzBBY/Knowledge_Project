<?php

$dbhost  = 'localhost';    // Unlikely to require changing
$dbname  = 'testdb';   // Modify these...
$dbuser  = 'root';   // ...variables according
$dbpass  = '';   // ...to your installation
/* $appname = "Robin's Nest"; // ...and preference  */

$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);




$con = new mysqli("localhost", "username", "password", "dbname");



mysqli("cis_id", $con);

$sql="INSERT INTO testdb (fname, lname)
VALUES
('$_POST[fname]','$_POST[lname]')";


if (!mysqli_query($sql,$con))
{
    die('Error: ' . mysqli_error());
}
echo "1 record added";
mysqli_close($con)
?>
