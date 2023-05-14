<?php

 include_once("db/db_connection.php");
$conn = OpenCon();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
</head>
<body style="background-image: url('img/bg.jpg');  background-repeat: no-repeat; 
background-attachment: fixed; background-size: cover;">
    <header>
       
        <img class="logo" src="img/logo1.png" alt="logo" width="450px" height="400px">
        <nav>
         <ul class="nav_links">
             <li><a href="index.php" >Home</a></li>
             <li><a href="About.html"  >About</a></li>
             <li><a href="contact.php" >Contact</a></li>
             <li><a href="products.php" >Product</a></li>
             
             <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
             
         </ul>

         
     </nav> 
      
     </header>
     <div class="container1">
        <div class="product2">
            <div style="width: 100%; height: 100%; text-align: center; padding: 20px;">
            <h1>Products</h1>
            <hr class="" style="color: darkred;">
        </div>
        </div>
        <div class="one-container">
            <div class="box p-4">
                <div class="imgs"><img src="img/strat.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Electric Guitar Stratocaster</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;6,999.00</p>
            </div>
            
            <div class="box p-4">
                <div class="imgs"><img src="img/strat.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Electric Guitar Stratocaster</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;6,999.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/cranberries.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5" >Acoustic Guitar Cranberries </h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;4,550.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/categ1.png" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Vangoa 6 String Banjo </h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;99,000.00</p>
            </div>
        </div>

        <div class="one-container">
            <div class="box p-4">
                <div class="imgs"><img src="img/classicguitar.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Nylon String Classical Guitar</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;4,999.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/classicguitar.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Nylon String Classical Guitar</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;4,999.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/yamaha-p45piano.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Yamaha p-45 piano</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;30,550.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/NUX Wk-400_27k.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">NUX WK-400 Piano</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;27,000.00</p>
            </div>
        </div>
        <div class="one-container">
            <div class="box p-4">
                <div class="imgs"><img src="img/grand-piano.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Grand Piano</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;59,999.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/grand-piano.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Grand Piano</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;59,999.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/U3series.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Upright U3 Series Piano</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;81,950.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/thomson solid spruce top violin.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Thompson Solid Spruce Top Violin</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;3,990.00</p>
            </div>
        </div>
        <div class="one-container">
            <div class="box p-4">
                <div class="imgs"><img src="img/mozartviolin.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Mozart Violin</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;2,556.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/mozartviolin.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">Mozart Violin</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;2,556.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/Leonardo-electric_violin.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 >Leonardo Electric Violin</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;99,550.00</p>
            </div>
            <div class="box p-4">
                <div class="imgs"><img src="img/O-kay_Violin.jpg" alt="" style="height: 200px; width: 100%;"></div>
                <h4 class="mt-5">O-KAY Professional Violin</h4>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>&#8369;4,560.00</p>
            </div>
        </div>
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
            <h4 style="text-align: center">Follow us</h4>
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                <li><a href="https://www.instagram.com/"  target="_blank">Instagram</a></li>
                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"  target="_blank">Youtube</a></li>
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