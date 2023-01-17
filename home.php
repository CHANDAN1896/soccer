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


    <script>
      function preback(){window.history.forward();}
      setTimeout("preback()",0);
      window.onunload=function(){null};
   </script>
   


   <script>

"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ucei48nz7udd');


</script>
    

</head>
<body>


<section id="header">
            <a href="#"><img src="css/logo.png" class="logo" ></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="home.php" ><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="sports.php"><i class="fa-solid fa-money-check-dollar"></i> Sports</a></li>
                    <li><a href="fill.php"><i class="fa-solid fa-blog"></i> Fill form</a></li>
                    <li><a href="about.php"><i class="fa-solid fa-address-card"></i> About</a></li>
                    <li><a href="contact.php"><i class="fa-solid fa-envelope-circle-check"></i> Contact Us</a></li>
                      
                    
                   <li id="bar1" > <a href="#"> <i data-bs-toggle="modal" data-bs-target="#staticBackdrop">

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


 
            <!-- responsive banner start-->


            <div id="hero">
                <div class="Portal">
                <h4>!deas which are intellectual</h4>
                <h2> Definative & Innovative</h2>
                <h1>Online Portal for !deas</h1>
                <p>"The best way to predict the future is to invent it." 
                <p>-Theodore Hook</p>
                </p>
                <button class="normal">view more</button>
                </div>
                <div >
                <img class="brain" src="css/sports.jpg" width="100%" height="400px" >
                </div>
            </div>
           
            <!-- banner closing -->








            <!-- carousel start-->

          


            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="background: red; height:400px;">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000" >
                    <img src="css/" class="d-block w-100" alt="..."  >
                 
                  
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="css/sports.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="css/sports.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>



    
<!-- carousel end-->
        



<!--sports page start-->
<center><h1> Some popular sports :</h1></center>
<section id="feature" class="section-p1">
    
    <div class="fe-box">
        <div class="line">
         <div class="card1">
        <img src="css/football.jpg" alt="">
        <a href="soccer.html"><h6>Soccer</h6></a>
       
        </div>
        </div>

    </div>

    <div class="fe-box">
        <div class="line">
        <div class="card1">
        <img src="css/cricket.jpg" alt="">
        <h6>Cricket</h6>
  
        </div>
        </div>

    </div>

    <div class="fe-box">
        <div class="line">
        <div class="card1">
        <img src="css/hockey1.jpg" alt="">
        <h6>Hockey</h6>
     
       
        </div>
        </div>

    </div>

    <div class="fe-box">
        <div class="line">
        <div class="card1">
        <img src="css/badminton.jpg" alt="">
        <h6>Badminton</h6>
       
    </div>
    </div>

    </div>

    <div class="fe-box">
        <div class="line">
        <div class="card1">
        <img src="css/basketball.jpg  " alt="">
        <h6>Basketball</h6>
      
        </div>
        </div>

    </div>

    <div class="fe-box">
        <div class="line">
        <div class="card1">
        <img src="css/volleyball.jpg  " alt="">
        <h6>Volleyball</h6>

        
        </div>
        </div>
    </div>

   
<div id="hide1" >
    <div>
    <div class="hidden" >

    <div class="fe-box"  >
        <div class="line">
        <div class="card1">
        <img src="css/kabbadi.jpg" alt="">
        <h6>kabbadi</h6>
        
        </div>
        </div>

    </div>

    <div class="fe-box" >
        <div class="line">
        <div class="card1">
        <img src="css/kho-kho.jpeg" alt="">
        <h6>Kho-Kho</h6>
       
        </div>
        </div>
    </div>

    
    <div class="fe-box" >
        <div class="line">
        <div class="card1">
        <img src="css/tennis.jpeg" alt="">
        <h6>Tennis</h6>
       
        </div>
        </div>
    </div>


    
    <div class="fe-box" >
        <div class="line">
        <div class="card1">
        <img src="css/tt.jpg" alt="">
        <h6>Table-Tennis</h6>
       
        </div>
        </div>
    </div>


    
    <div class="fe-box" >
        <div class="line">
        <div class="card1">
        <img src="css/fencing.jpg" alt="">
        <h6>Fencing</h6>
       
        </div>
        </div>
    </div>

    <div class="fe-box"   >
        <div class="line">
        <div class="card1">
        <img src="css/golf.jpeg" alt="">
        <h6>Golf</h6>
       
        </div>
       </div>
    </div>
   </div>
   </div>
</div>
</section>
<center><button id="toggle" >View more</button></center>

<script>
	const targetDiv = document.getElementById("hide1");
const btn = document.getElementById("toggle");
btn.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
    toggle.innerHTML = "View more";
  } else {
    targetDiv.style.display = "block";
    toggle.innerHTML = "view less";
  }
};
</script>

<!-- sports page end-->



<!-- news letter start -->
  
<section id="newsletter" class="section-p1 section-m1">

  <div class="newstext">
      <h4>Sign Up for the Newsletter</h4>
      <p>Get an e-mail updates about our latest creative !deas and <span>huge discount</span></p>
  </div>
  
  <form class="form1" action="newsletter.php" method="post">
      <input type="email" id="email" name="email" placeholder="your email address" onfocus="" required >
      <input type="submit"  value="send" id="btn1" name="submit" style="width: 30%;">
   
</form>
  </section>
 

  
  
  <!-- news letter end -->
  
  
 



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