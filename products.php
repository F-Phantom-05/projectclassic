<?php

 include_once("db/db_connection.php");

 
 if (isset($_POST['addcart'])) {
    $product_id = $_POST['product_id'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    $productPrice = $_POST['price'];

    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, image, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $product_id, $productName, $productImage, $productPrice);

    if ($stmt->execute()) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} elseif (isset($_POST['addcart2'])) {
    $product_id = $_POST['product_id'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    $productPrice = $_POST['price'];

    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, image, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $product_id, $productName, $productImage, $productPrice);

    if ($stmt->execute()) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
elseif (isset($_POST['addcart3'])) {
    $product_id = $_POST['product_id'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    $productPrice = $_POST['price'];
    
    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, image, price) VALUES ('', '', '', '')");
    $stmt->bind_param("isss", $product_id, $name, $image, $price);

    if ($stmt->execute()) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
elseif (isset($_POST['addcart4'])) {
    $product_id = $_POST['product_id'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    $productPrice = $_POST['price'];
    
    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, image, price) VALUES ('', '', '', '')");
    $stmt->bind_param("isss", $product_id, $name, $image, $price);

    if ($stmt->execute()) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
elseif (isset($_POST['addcart5'])) {
    $product_id = $_POST['product_id'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    $productPrice = $_POST['price'];
    
    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, image, price) VALUES ('', '', '', '')");
    $stmt->bind_param("isss", $product_id, $name, $image, $price);

    if ($stmt->execute()) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
elseif (isset($_POST['addcart6'])) {
    $product_id = $_POST['product_id'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    $productPrice = $_POST['price'];
    
    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, image, price) VALUES ('', '', '', '')");
    $stmt->bind_param("isss", $product_id, $name, $image, $price);

    if ($stmt->execute()) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
elseif (isset($_POST['addcart7'])) {
    $product_id = $_POST['product_id'];
    $productName = $_POST['name'];
    $productImage = $_POST['image'];
    $productPrice = $_POST['price'];
    
    $stmt = $conn->prepare("INSERT INTO cart (product_id, name, image, price) VALUES ('', '', '', '')");
    $stmt->bind_param("isss", $product_id, $name, $image, $price);

    if ($stmt->execute()) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    
}


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/logo2.jpg">
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
       
        <a href="index.php"><img class="logo" src="img/logo1.png" alt="logo" width="450px" height="400px"></a>
        <nav>
         <ul class="nav_links">
             <li><a href="index.php" >Home</a></li>
             <li><a href="About.html"  >About</a></li>
             <li><a href="contact.php" >Contact</a></li>
             <li><a href="products.php" >Product</a></li>
             <li><a href="loginreg.php" >Login</a></li>
             <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
             
         </ul>

         
     </nav> 
      
     </header>

    
        <div class="product2">
            <div style="width: 100%; height: 100%; text-align: center; padding: 20px;">
            <h1>Products</h1>
            <hr class="" style="color: darkred;">
        </div>
        </div>

    <div class="container">
    <div class="row">
        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/strat.jpg" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">Electric Guitar Stratocaster</h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;6,999.00</p>
        <input type="hidden" name="product_id" value="1">
        <input type="hidden" name="name" value="Electric Guitar Stratocaster">
        <input type="hidden" name="image" value="img/strat.jpg">
        <input type="hidden" name="price" value="6999.00">
        <button class="btn btn-info" name="addcart" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
    </div>

    
        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/cranberries.jpg" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">Acoustic Guitar Cranberries </h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;4,550.00</p>
        <input type="hidden" name="product_id" value="2">
        <input type="hidden" name="name" value="Acoustic Guitar Cranberries">
        <input type="hidden" name="image" value="img/cranberries.jpg">
        <input type="hidden" name="price" value="4550.00">
        <button class="btn btn-info" name="addcart1" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
    </div>


        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/U3series.jpg" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">Upright U3 Series Piano</h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;81,950.00</p>
        <input type="hidden" name="product_id" value="3">
        <input type="hidden" name="name" value="Upright U3 Series Piano">
        <input type="hidden" name="image" value="img/U3series.jpg">
        <input type="hidden" name="price" value="81950.00">
        <button class="btn btn-info" name="addcart2" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
    </div>


        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/classicguitar.jpg" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">Nylon String Classical Guitar</h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;4,999.00</p>
        <input type="hidden" name="product_id" value="4">
        <input type="hidden" name="name" value="Nylon String Classical Guitar">
        <input type="hidden" name="image" value="img/classicguitar.jpg">
        <input type="hidden" name="price" value="4999.00">
        <button class="btn btn-info" name="addcart3" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
    </div>

    
        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/yamaha-p45piano.jpg" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">Yamaha p-45 piano</h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;30,550.00</p>
        <input type="hidden" name="product_id" value="5">
        <input type="hidden" name="name" value="Yamaha p-45 piano">
        <input type="hidden" name="image" value="img/yamaha-p45piano.jpg">
        <input type="hidden" name="price" value="30550.00">
        <button class="btn btn-info" name="addcart4" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
    </div>

        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/grand-piano.jpg" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">Grand Piano</h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;59,999.00</p>
        <input type="hidden" name="product_id" value="6">
        <input type="hidden" name="name" value="Grand Piano">
        <input type="hidden" name="image" value="img/grand-piano.jpg">
        <input type="hidden" name="price" value="59999.00">
        <button class="btn btn-info" name="addcart5" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
    </div>
    
    
        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/categ1.png" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">Vangoa 6 String Banjo</h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;99,000.00</p>
        <input type="hidden" name="product_id" value="7">
        <input type="hidden" name="name" value="Vangoa 6 String Banjo">
        <input type="hidden" name="image" value="img/categ1.png">
        <input type="hidden" name="price" value="99000.00">
        <button class="btn btn-info" name="addcart6" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
    </div>

    
        <div class="col-lg-3">
        <form action="pdprocess.php" method="POST">
    <div class="card p-2">
        <img src="img/O-kay_Violin.jpg" alt="" style="height: 200px; width: 100%;">
        <h4 class="mt-5">O-KAY Professional Violin</h4>
        <div class="ratings">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        </div>
        <p>&#8369;4,560.00</p>
        <input type="hidden" name="product_id" value="8">
        <input type="hidden" name="name" value="O-KAY Professional Violin">
        <input type="hidden" name="image" value="img/O-kay_Violin.jpg">
        <input type="hidden" name="price" value="4560.00">
        <button class="btn btn-info" name="addcart7" style="margin-top: 10px; margin-left: 30px">Add to Cart</button>
    </div>
    </form>
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