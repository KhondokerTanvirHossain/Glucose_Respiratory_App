<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "healthcare4";
	$conn = mysqli_connect($servername, $username, $password, $database);
	$table = "heart";
	$heart = "";
	if (isset($_POST['heart']))
		$heart = $_POST['heart'];
	$json = array();
	if (!empty($heart)){
		$query = "insert into ".$table." (heart) values ('$heart')";
		$inserted = mysqli_query($conn, $query);
		if ($inserted != null){
			$json['success1'] = 1;
			$json['message1'] = "Successfully Heart Inserted";
		}
		else{
			$json['success1'] = 0;
			$json['message1'] = "Data insertion failed";
		}
	}
	else{
		$json['success1'] = -1;
		$json['message1'] = "Data Not Found";
	}
	echo json_encode($json);	
?>