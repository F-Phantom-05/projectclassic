<?php
    
    include_once("db/db_connection.php");

    $conn = OpenCon();

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

<?php
    include("header.php");
?>
<body style="background-image: url('img/bg.jpg');  background-repeat: no-repeat; 
background-attachment: fixed; background-size: cover;">
  <header>
    <img class="logo" src="img/logo1.png" alt="logo" width="450px" height="400px">
    <nav>
     <ul class="nav_links">
         <li><a href="index.php" >Home</a></li>
         <li><a href="About.html" >About</a></li>
         <li><a href="contact.html">Contact</a></li>
         <li><a href="products.html" >Product</a></li>
         <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
         
     </ul>
 </nav> 
 </header>
    <div class="container contact-us bg-dark-subtle mb-4 mt-4 rounded"> 
        <h2>Contact Us</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" >
          </div>
          
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" >
          </div>
          
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" ></textarea>
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

</html>
