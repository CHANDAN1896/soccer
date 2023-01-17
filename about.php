<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>         
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">
    

</head>
<body>


<section id="header">
            <a href="#"><img src="css/logo.png" class="logo" ></a>

            <div>
                <ul id="navbar">

                    <li><a href="home.php" ><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="sports.php"><i class="fa-solid fa-money-check-dollar"></i> Sports</a></li>
                    <li><a href="fill.php"><i class="fa-solid fa-blog"></i> Fill form</a></li>
                    <li><a class="active" href="about.php"><i class="fa-solid fa-address-card"></i> About</a></li>
                    <li><a href="contact.php"><i class="fa-solid fa-envelope-circle-check"></i> Contact Us</a></li>
                      
                    
                   <li> <a href="#"> <i id="bar1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

      <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
      if($fetch['image'] == ''){
         echo '<img height="80px" width="80px" style="border-radius:50%" src="images/default-avatar.png">';
      }else{
         echo '<img width="80px" height="80px" style="border-radius:50%" src="uploaded_img/'.$fetch['image'].'">';
      }
      ?>
      </i></a></li>

      <p id="close"><i class="fa fa-times"></i> </p>
                </ul>


            </div>

            <!-- responsive hamberger icon code -->

            <div id="mobile">
              
              <i id="bar" class="fas fa-outdent"> </i>
          </div>


        </section>

     


<!-- Vertically centered scrollable modal -->
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        
        <div class="container" >

<div class="profile" >

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
      if($fetch['image'] == ''){
         echo '<img src="images/default-avatar.png">';
      }else{
         echo '<img src="uploaded_img/'.$fetch['image'].'">';
      }
   ?>
   <h3><?php echo $fetch['name']; ?></h3>
   <a href="update_profile.php" class="btn">update profile</a>
   <a href="home1.html?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
   <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
</div>

</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>

 


  <!-- footer -->
<!-- footer start -->



<footer>

<div class="foo1">
     <img class="bottom_logo" src="css/logo.png">
        <h4>Contact Us</h4>
        <p><strong>Address: </strong> 26985 Brighton Lane, Lake Forest, CA 92630.</p>
        <p><strong>Phone No: </strong>9988776655</p>
        <p><strong>Avilability:</strong>24/7</p>

        
        <div class="follow_us">
            <h4>Follos us on Social Media</h4>

            <div class="icons">
              <a id="foota" href="https://www.youtube.com"><i class="fa-brands fa-youtube fa-2x"></i></a>
               <a id="foota" href="https://www.twitter.com"> <i class="fa-brands fa-twitter fa-2x"></i></a>
               <a id="foota" href="https://www.facebook.com"> <i class="fa-brands fa-facebook fa-2x"></i></a>
               <a id="foota" href="https://www.instagram.com"> <i class="fa-brands fa-instagram fa-2x" ></i></a>
            </div>    

</div>

</div>


<div class="foo1" >

                    <center><h4>About</h4><br></center>
         <ul>
                    
       <li> <a href="#" id="foota">About Us</a></li>
       <li> <a href="#" id="foota">Product Information</a></li>
        <li><a href="#" id="foota">Privacy Policy</a></li>
       <li> <a href="#" id="foota">Terms & Conditions</a></li>
       <li> <a href="#" id="foota">Contact Us</a></li>
   </ul>
    

</div>

<div class="foo1" >


       <center> <h4> Timing </h4><br></center>
        <ul>

        <li><b>Monday   :</b></li>
        <li><b>Tuesday  :</b></li>
        <li><b>Wednesday:</b></li>
        <li><b>Thursday :</b></li>
        <li><b>Friday   :</b></li>
        <li><b>Saturday :</b></li>
   </ul>
    

</div>

<div class="foo1">
                    <h4>Install our App</h4>
        <p>From Google Play Store or App Store</p>
        <div class="row">
            <img src="css/gp1.png" style="height:70px; width: 300px;">
            <img src="css/as.png" style="height:70px; width: 300px;"">
        </div>
        <p>Secured Payment Options</p>
        <img src="css/pg.png" style="height:150px; width: 400px;">

</div>
</footer>

<center> 
    <div class="copyright">
    <p>All right reserved &#169; 2022 Sports Wallah</p>

</div>
</center>

<script src="js/script.js"></script>
    </body>
    </html>