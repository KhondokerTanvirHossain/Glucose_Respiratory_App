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
	$table = "glucose";
	$glucose = "";
	$date = "";
	$time = "";
	if (isset($_POST['glucose']))
		$glucose = $_POST['glucose'];
	if (isset($_POST['date']))
		$date = $_POST['date'];
	if (isset($_POST['time']))
		$time = $_POST['time'];
	
	if (!empty($glucose)){
		$query = "insert into ".$table." (time,date,glucose) values ('$time', '$date', '$heart')";
		$inserted = mysqli_query($conn, $query);
		if ($inserted != null){
			$json['success2'] = 1;
			$json['message2'] = "Successfully Glucose Inserted";
		}
		else{
			$json['success2'] = 0;
			$json['message2'] = "Data insertion failed";
		}
	}
	else{
		$json['success2'] = -1;
		$json['message2'] = "Data Not Found";
	}
	echo json_encode($json);	
?>