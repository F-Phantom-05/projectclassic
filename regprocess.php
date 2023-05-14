<?php

include "db/db_connection.php";

    if(isset($_POST['signup']))
    {
        $username = $_POST['user'];
        $address = $_POST['email'];
        $contact = $_POST['pass'];
        

        $sql = "INSERT INTO register(`user`, `email`, `password`) VALUES ('$username','$address','$contact')";
        $result = $conn->query($sql);
        if($result == TRUE)
        {

            echo "<script>alert('Registration successful!');</script>";
            echo "<script>window.location.href ='loginreg.php';</script>";
        }
            
    }
?>