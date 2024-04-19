<?php
$conn = new mysqli('localhost', 'root', '', 'bookstore');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$state = $_POST['state'];
$address = $_POST['address'];
$houseno = $_POST['houseno'];
$pincode = $_POST['pincode'];
$age = $_POST['age'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO `buyform` VALUES ('$firstname', '$lastname', '$phone', '$email', '$state', '$address', '$houseno', '$pincode', '$age', '$quantity')";
$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "Order successful";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
header('location:payment.html');
?>
