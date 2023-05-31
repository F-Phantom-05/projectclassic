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
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    
    <style>
         table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    th {
        background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    tr:hover {
        background-color: #e9e9e9;
    }
    </style>
</head>
<body style="background-image: url('img/bg.jpg');  background-repeat: no-repeat; 
background-attachment: fixed; background-size: cover;">
    <header>
       
    <a href="index.php"><img class="logo" src="img/logo1.png" alt="logo" width="450px" height="400px"></a>
       <nav>
        <ul class="nav_links">
            <li><a href="index.php" >Home</a></li>
            <li><a href="About.html"  >About</a></li>
            <li><a href="contacts.php" >Contact</a></li>
            <li><a href="products.php" >Product</a></li>
            <li><a href="loginreg.php" >Login</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            
        </ul>
        
    </nav>      
    </header>
     <table>
     <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Price</th>
         
     </tr>
<?php
include "db/db_connection.php";

if(isset($_GET["delete_id"])) {
    $delete_id = $_GET["delete_id"];
    
    // SQL query to delete the row with the provided ID
    $delete_sql = "DELETE FROM product WHERE id = $delete_id";
    
    if ($conn->query($delete_sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>" . $row["id"] . "</td>
              <td>" . $row["name"] . "</td>
              <td>" . $row["price"] . "</td>
              <td><a href='?delete_id=" . $row["id"] . "'class='btn btn-danger'><i class='fas fa-trash-alt'></i></a></td>
              </tr>";
    }
}
$conn->close();
?>

</table>
</body>
<script src="https://kit.fontawesome.com/428f90d8fe.js" crossorigin="anonymous"></script>
</html>