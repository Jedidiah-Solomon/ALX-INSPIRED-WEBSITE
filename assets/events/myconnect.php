<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','jedidiah-solomon-2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into myMember(name, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo 'Message Sent Successfully!!...Welcome onboard';
		$stmt->close();
		$conn->close();
	}
?>
