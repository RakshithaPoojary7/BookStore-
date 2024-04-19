<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$phone=$_POST['phone'];

$conn=new 
mysqli('localhost','root','','test');

if($conn->connect_error){
    echo "$conn->connect_error";
    die('Connection Failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into register(name,email,password,conpassword,phone)values(?,?,?,?,?)");
    $stmt->bind_param('ssssi',$name,$email,$password,$conpassword,$phone);
    $execval=$stmt->execute();
echo $execval;
    echo "registration successful";
$stmt->close();
$conn->close();
header('location:web.html');
}
?>