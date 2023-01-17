
<div>

<!--newsletter php connection-->

<?php

$email = $_POST['email'];
$conn = new mysqli('localhost','root','','ouruser');
if ($conn->connect_error){
 die('connection failed:'.$connect_error);
}else{
 $stmt = $conn ->prepare("insert into newsletter (email) values(?)");
 $stmt->bind_param("s",$email);
 $stmt->execute();
 
 
 $stmt ->close();
 $conn ->close();
}

?>

</div>

<html>
<head>
    <title>email</title>
    
</head>
<body>
<h1>Thanks for your valuable feedback</h1>
<a href="home.php">go back </a>

</body>




<?php

      $uname = $_POST['username'];
      $uemail = $_POST['useremail'];
      $sno = $_POST['pno'];
      $address = $_POST['useradd'];
      $sports = $_POST['ssport'];

      if(!empty($username) || !empty($useremail) ||  !empty($pno) ||  !empty($useradd) ||  !empty($ssport)){

         $host = "localhost";
         $dbusername = "root";
         $dbpassword = "root";
         $dbname = "fillform";

         //connection

         $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

         if (mysqli_connect_error()){
            die('connect error ('. mysqli_connect_error().')'. mysqli_connect_error());

         }else{
            $SELECT = "SELECT uemail From form Where uemail =? Limit 1 ";
            $INSERT = "INSERT into form (username,useremail,pno,useradd,ssport) values(?,?,?,?,?)";

            //prepare statement 
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$uemail);
            $stmt->execute();
            $stmt->bind_result($uemail)
            $rnom = $stmt->num_rows;
            if ($rnom==0){
               $stmt->close();

               $stmt=$conn->prepare($INSERT);
               $stmt->bind_param("ssiss", $username,$useremail,$pno,$useradd,$ssport);
               $stmt->execute();

               echo"new record inserted successfully";
            }else{
               echo"some one already registered using this email"
            }
            $stmt->close();
            $conn->close();

         }


      }else{
         echo "all fields are required";
         die();
      }


?>
</html>