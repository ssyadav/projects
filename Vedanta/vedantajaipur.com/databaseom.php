<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vedanta_jaipur_main";
	
	//$username = "orbuy";
	//$password = "orbuy@prs123";
	//$dbname = "orbuyin_orbuy_prs";
	
	// Create connection	
	//$connection = mysql_connect($servername, $username, $password);
	//$db = mysql_select_db($dbname, $connection);
	
	$connection = mysqli_connect($servername, $username, $password,$dbname);
	if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
 // $servername = "localhost";
	//$username = "u571909923_vedan";
	//$password = "idO6rEYXaL$";
	//$dbname = "u571909923_vedan";
?>
