<?php
    
    include_once("db/db_connection.php");

  

    if(isset($_POST['submit']))
    {
      $name = $_POST['name'];
      $emails = $_POST['email'];
      $message = $_POST['message'];

     $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$emails','$message')";

      $conn->query($sql)  or die ($conn->error);

      echo header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/logo2.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  <Script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></Script>
</head>
<body style="background-image: url('img/bg.jpg');  background-repeat: no-repeat; 
background-attachment: fixed; background-size: cover;">
  <header>
  <a href="index.php"><img class="logo" src="img/logo1.png" alt="logo" width="450px" height="400px"></a>
    <nav>
     <ul class="nav_links">
         <li><a href="index.php" >Home</a></li>
         <li><a href="About.html" >About</a></li>
         <li><a href="contact.html">Contact</a></li>
         <li><a href="products.html" >Product</a></li>
         <li><a href="loginreg.php" >Login</a></li>
         <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
         
     </ul>
 </nav> 
 </header>
    <div class="container  bg-dark-subtle mb-4 mt-4 rounded"> 
        <h2>Contact Us</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"  >
          </div>
          
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"  >
          </div>
          
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message"  ></textarea>
          </div>
          
          <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
      </div>

<!--Footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
            <h2 style="color:rgb(247, 247, 247)">STRAVIPO</h2>
            <p>At Stravipo, our purpose is to preserve the beauty of music history and  inspire the future of music
                 with high-quality classic instruments that produce rich and soulful sounds.</p>
                </div>
        
        <div class="footer-col-3">
            <h3>Follow us</h3>
            <ul>
              <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
              <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
              <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
              <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Youtube</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <p class="copy">Copyright © 2023. STRAVIPO. All Rights Reserved</p>
    </div>
</div>


   
</body>
<script src="https://kit.fontawesome.com/428f90d8fe.js" crossorigin="anonymous"></script>
<script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission
        var confirmationMessage = "Thank you! Your response is successfully sent!";
        alert(confirmationMessage);
    });
</script>
</html>
