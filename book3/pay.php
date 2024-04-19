<?php

$payment=$_POST['payment'];
$conn=new 
mysqli('localhost','root','','test');

if($conn->connect_error){
    echo "$conn->connect_error"
    die('Connection Failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into paid(payment)values(?)");
    $stmt->bind_param('s',$payment);
    $execval=$stmt->execute();
echo $execval;
    echo "successful";
$stmt->close();
$conn->close();
}
?>