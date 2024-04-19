<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cardNumber = $_POST["cardNumber"];
    $cvv = $_POST["cvv"];
    $expiryDate = $_POST["expiryDate"];

    // Validate and sanitize input (you should enhance this based on your needs)

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database (you should use prepared statements to prevent SQL injection)
    $sql = "INSERT INTO cards (cardNumber, cvv, expiryDate) VALUES ('$cardNumber', '$cvv', '$expiryDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();

    // Redirect to the next page after processing
    header("Location: confirm.html");
    exit();
}
?>
