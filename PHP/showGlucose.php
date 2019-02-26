<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "healthcare4";
	$conn = mysqli_connect($servername, $username, $password, $database);
	$table = "glucose";
	$query = "SELECT * FROM ".$table;
	$result = mysqli_query($conn, $query);
	$rows = array();
	$jsonarray = array();
	if (mysqli_num_rows($result) > 0){
		while($r = mysqli_fetch_assoc($result)) {
		    $rows[] = $r;
		}
	}
	$jsonarray['array'] = $rows;
	echo (json_encode($jsonarray));
?>