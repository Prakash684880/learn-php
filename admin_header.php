<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}


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
   <link rel="stylesheet" href="css/admin_style.css">



</head>
<body>
            <?php

            if(isset($message)){
               foreach($message as $message){
                  echo '
                  <div class="message">
                     <span>'.$message.'</span>
                     <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                  </div>
                  ';
               }
            }
            ?>


   <!-- header section starts -->
<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_home.php">home</a>
         <a href="admin_users.php">users</a>
         <a href="admin_contacts.php">Messages</a>
         <a href="admin_appointment.php">Appointment</a>
      </nav>
      <div class="row align-items-center justify-content-between">
      <a href="login_form.php" class="link-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </div>
   </div>
</header>
    <!-- header section ends --> 

</body>
</html>