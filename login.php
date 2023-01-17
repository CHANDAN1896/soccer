<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn,($_POST['email']));
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" referrerpolicy="no-referrer" />

   <!-- restriction to go back -->

   <script>
      function preback(){window.history.forward();}
      setTimeout("preback()",0);
      window.onunload=function(){null};
   </script>

   

</head>
<body>


<section id="header">
            <a href="#"><img src="img/l4-.png" class="logo" ></a>

            <div>
                <ul id="navbar">
                    <li><a href="home1.html" ><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="buyidea.html"><i class="fa-solid fa-money-check-dollar"></i> Book tour</a></li>
                    <li><a href="blog.html"><i class="fa-solid fa-blog"></i> Destinations</a></li>
                    <li><a href="about.html"><i class="fa-solid fa-address-card"></i> About</a></li>
                    <li><a href="contact.html"><i class="fa-solid fa-envelope-circle-check"></i> Contact Us</a></li>
                    <li><a class="active" href="login.php"><i class="fa-solid fa-sign-in"></i> Login</a></li>   
                    <p id="close"><i class="fa fa-times"></i> </p>
                </ul>

            </div>
            <!-- responsive hamberger icon code -->

            <div id="mobile">
              
              <i id="bar" class="fas fa-outdent"> </i>
          </div>

        </section>


 
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="register.php">regiser now</a></p>
   </form>

</div>


<script src="js/script.js"></script>
</body>
</html>