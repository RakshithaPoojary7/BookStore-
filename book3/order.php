<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	$payment_method=$_POST['payment_method'];
	$size=$_POST['size'];
	$quantity=$_POST['quantity'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form2(firstname, lastname,email,number,address,payment_method,size,quantity) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param('sssisssi',$firstname, $lastname, $email, $number, $address, $payment_method,$size, $quantity);
		$execval = $stmt->execute();
		echo $execval;
		echo "YOUR ORDER HAS SUCCESFULLY BEEN PLACED. THANK YOU FOR SHOPPING!!!";
		$stmt->close();
		$conn->close();
	}
?>