<?php

$email=$_POST['email'];
$password=$_POST['password'];

$conn=new 
mysqli('localhost','root','','test');

if($conn->connect_error){
    echo "$conn->connect_error";
    die('Connection Failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into signin(email,password)values(?,?)");
    $stmt->bind_param('ss',$email,$password);
    $execval=$stmt->execute();
echo $execval;
    echo "login successful";
$stmt->close();
$conn->close();
header('location:web.html');
}
?>