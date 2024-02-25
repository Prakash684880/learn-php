<?php

$conn = mysqli_connect('localhost','root','','project_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `appointment_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }
}

$conn = mysqli_connect('localhost','root','','project_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}




// @include 'config.php';

// session_start();

// if(!isset($_SESSION['user_name'])){
//    header('location:login_form.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Agro Agency</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">



</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Agro<span>Agency</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#product">Product</a>
            <a href="#reviews">reviews</a>
            <a href="#contactform">contact</a>

         </nav>

         <a href="#appointmentform" class="link-btn">Make appointment</a>
         <a href="login_form.php" class="link-btn">LOGIN</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content t ext-center text-md-left">
            <h3>Agriculture is the most healthful,
            Most Useful & Most Noble Employment of man. </h3>
            <p>
            We plant our seeds so the world has something to eat tomorrow.
            Agriculture is the art and science of cultivating the soil, growing crops and raising livestock.
            </p>
            <a href="#appointmentform" class="link-btn">Make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about.png" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>Improving agriculture 
                              <span> Improve health</span>.</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
            <a href="#appointmentform" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/crop.jpg" alt="">
         <h3>Crop consulting Management</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="images/agronomy.jpg" alt="">
         <h3>Agronomy </h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="images/livestock.png" alt="">
         <h3>Livestock consulting & Management
         </h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="images/machine.png" alt="">
         <h3>Agriculture Equipment & Machinery </h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="images/agro financing.webp" alt="">
         <h3>Agriculture Financing
         </h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="images/agmarketing.png" alt="">
         <h3>Agriculture Marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/planning.png" alt="">
         <h3>Planning</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="images/preparingland.png" alt="">
         <h3>Preparing The land</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
      <div class="box">
         <img src="images/irrigation.png" alt="">
         <h3>Irrigation</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="images/harvesting.png" alt="">
         <h3>Harvesting</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
      <div class="box">
         <img src="images/storage.png" alt="">
         <h3>Storage</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
      <div class="box">
         <img src="images/agmarketing.png" alt="">
         <h3>Marketing</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
   </div>

</section>

<!-- process section ends -->


<!-- Appointment section starts  -->

<section class="contact" id="appointmentform">

   <h1 class="heading">Make Appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your Name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your Email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your Number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>Appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>
</form>

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied farmers</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/farmerlogo.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr.Ghanshyam</h3>
         <span>satisfied Farmer</span>
      </div>

      <div class="box">
         <img src="images/farmerlogo.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>MR.Shivahari </h3>
         <span>satisfied Farmer</span>
      </div>

      <div class="box">
         <img src="images/farmerlogo.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr.Harishyam Addhikari</h3>
         <span>Satisfied Farmer</span>
      </div>

   </div>

</section>


<!-- reviews section ends -->



<!-- contact section starts -->

<section class="contact" id="contactform">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="link-btn">
   </form>
</section>
<!-- contact section end -->

<!-- comment -->
<div class="container mt-3 pt-5 pb-2 ">
  <h2>Comments</h2>
<div class="media border p-3">
    <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>Ram Hari <small><i>Posted on January 19, 2020</i></small></h4>
      <p>great consulting about agriculture  </p> 
        <div class="media p-3">
          <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:40px;">
          <div class="media-body">
            <h4>Sita <small><i>Posted on January 20 2020</i></small></h4>
            <p>It helps me alot too.</p>
             </div>
        </div> 
        <div class="media p-3">
          <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:45px;">
          <div class="media-body">
            <h4>Shyam <small><i>Posted on January 20 2020</i></small></h4>
            <p>yeah. its awesome learnig amazing things from here.
            </p>
             </div>
        </div>            
    </div>
      <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:45px;">
      <div class="media-body">
        <h4>Geetanjali <small><i>Posted on February 20 2020</i></small></h4>
        <p>your tech & method are best for present agriculture sector.
        </p>
        <div class="media p-3">
          <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:45px;">
          <div class="media-body">
            <h4>Dilrubaa <small><i>Posted on January 21 2020</i></small></h4>
            <p>It really inspires us to more hard work & grow heathy products  .
            </p>
             </div>
        </div>
        <div class="media p-3">
        <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:30px;">
      <div class="media-body">
        <h4>Kesari <small><i>Posted on February 25 2020</i></small></h4>
        <p>Your seminars and consulting make our work easier & helps us to preserve the products for more duration of time. 
        </p></div>
      </div>        
  </div>
 </div> 
</div>             
<!-- comment end -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+977-986*******</p>
         <p>+977-97********</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Kathmandu , 064000</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 5:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>  Email address</h3>
         <p>agroagency@gmail.com</p>
         <p>agroagency12@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span class="agro">Agro</span><span>Agency</span>  </div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>