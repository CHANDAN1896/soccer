
<?php

$email = $_POST['uemail'];
$conn = new mysqli('localhost','root','','form');
if ($conn->connect_error){
 die('connection failed:'.$connect_error);
}else{
 $stmt = $conn ->prepare("insert into fillform (email) values(?)");
 $stmt->bind_param("s",$email);
 $stmt->execute();
 
 
 $stmt ->close();
 $conn ->close();
}

?>