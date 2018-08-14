<?php
unset($row);

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['parameter']) || empty($_POST['paramvalue'])) {
$error = "Parameter is invalid";
}
else
{
// Define $username and $password
$parameter=$_POST['parameter'];
$paramvalue=$_POST['paramvalue'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$dbhost = '198.71.225.62:3306';
$dbuser = 'hotelDBUser';
$dbpass = 'hotelDBUser@123';
$connection = mysql_connect($dbhost, $dbuser, $dbpass);

// To protect MySQL injection for Security purpose
$parameter= stripslashes($parameter);
$paramvalue= stripslashes($paramvalue);
$parameter= mysql_real_escape_string($parameter);
$paramvalue= mysql_real_escape_string($paramvalue);

// Selecting Database
$db = mysql_select_db("ganpatiHotelDB", $connection);

// SQL query to fetch information of registerd users and finds user match.
$result = mysql_query("select * from BookingDetails where $parameter='$paramvalue'", $connection);
$row = mysql_fetch_array( $result );


mysql_close($connection); // Closing Connection
}
}
?>