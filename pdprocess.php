<?php 
 include_once("db/db_connection.php");

if (isset($_POST['addcart'])) {
    $productName = "Electric Guitar Stratocaster";
    $productPrice = 6999.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}

if (isset($_POST['addcart1'])) {
    $productName = "Acoustic Guitar Cranberries";
    $productPrice = 4550.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}


if (isset($_POST['addcart2'])) {
    $productName = "Upright U3 Series Piano";
    $productPrice = 81950.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}



if (isset($_POST['addcart3'])) {
    $productName = "Nylon String Classical Guitar";
    $productPrice = 4999.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}


if (isset($_POST['addcart4'])) {
    $productName = "Yamaha p-45 piano";
    $productPrice = 30550.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}


if (isset($_POST['addcart5'])) {
    $productName = "Grand Piano";
    $productPrice = 59999.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}


if (isset($_POST['addcart6'])) {
    $productName = "Vangoa 6 String Banjo ";
    $productPrice = 99000.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}


if (isset($_POST['addcart7'])) {
    $productName = "O-KAY Professional Violin";
    $productPrice = 4560.00;

    // Insert the product into the database
    $query = "INSERT INTO product (name, price) VALUES ('$productName', $productPrice)";
    $result = mysqli_query($conn, $query);

    if ($result) {
          echo "<script>alert('Product added to the cart.!');</script>";
        echo "<script>window.location.href ='products.php';</script>";
    } else {
        echo "Error adding product to the database: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

