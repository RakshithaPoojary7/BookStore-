<?php

$fname=$_POST['fname'];
$mail=$_POST['mail'];
$msg=$_POST['msg'];

$conn=new 
mysqli('localhost','root','','test');

if($conn->connect_error){
    echo "$conn->connect_error";
    die('Connection Failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into contact(fname,mail,msg)values(?,?,?)");
    $stmt->bind_param('sss',$fname,$mail,$msg);
    $execval=$stmt->execute();
echo $execval;
    echo "submitted successful";
$stmt->close();
$conn->close();
}
?>