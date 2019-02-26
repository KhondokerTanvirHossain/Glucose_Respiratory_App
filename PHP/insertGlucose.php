<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "healthcare4";
	$conn = mysqli_connect($servername, $username, $password, $database);
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
	$json = array();
	if (!empty($glucose)){
		$query = "insert into ".$table." (time,date,glucose) values ('$time', '$date', '$glucose')";
		$inserted = mysqli_query($conn, $query);
		if ($inserted != null){
			$json['success'] = 1;
			$json['message'] = "Successfully Glucose Inserted";
		}
		else{
			$json['success'] = 0;
			$json['message'] = "Data insertion failed";
		}
	}
	else{
		$json['success'] = -1;
		$json['message'] = "Data Not Found";
	}
	echo json_encode($json);	
?>