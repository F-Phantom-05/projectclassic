<?php 

    include_once("db/db_connection.php");
    $conn = OpenCon();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/logo2.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRAVIPO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    

</head>
<body style="background-image: url('img/bg.jpg');  background-repeat: no-repeat; 
background-attachment: fixed; background-size: cover;">
    <header>
       
       <img class="logo" src="img/logo1.png" alt="logo" width="450px" height="400px">
       <nav>
        <ul class="nav_links">
            <li><a href="index.php" >Home</a></li>
            <li><a href="About.html"  >About</a></li>
            <li><a href="contacts.php" >Contact</a></li>
            <li><a href="products.html" >Product</a></li>
            
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
            
        </ul>
        
    </nav>      
    </header>

<div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                      
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>


    <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
            <h2 style="color:rgb(247, 247, 247)">STRAVIPO</h2>
            <p>At Stravipo, our purpose is to preserve the beauty of music history and  inspire the future of music
                 with high-quality classic instruments that produce rich and soulful sounds.</p>
                </div>
        
        <div class="footer-col-3">
            <h3 style="text-align: center;">Follow us</h3>
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