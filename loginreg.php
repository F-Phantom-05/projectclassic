<!DOCTYPE html>
<html lang="en">
<?php
 include("header.php");
?>
<body style=" background-image: url('img/grand-piano.jpg');"> 
        <div class="nav">
            <div class="logo">
                <h2 class="text-light">STRAVIPO</h2>
            </div>
           
        </div>
        <div class="container">
            <div class="main">  	
                <input type="checkbox" id="check" aria-hidden="true">
        
                    
            <div class="signup">
                <form method="post" action="regprocess.php">
                    <label for="check" aria-hidden="true">Sign up</label>
                    <input type="text" id="user" name="user" placeholder="User name" >
                    <input type="email" id="email" name="email" placeholder="Email" >
                    <input type="password" id="pass" name="pass" placeholder="Password" >
                    <button type="submit" name="signup">Sign up</button>
                </form>
            </div>
        
            <div class="login" id="login" >
                <form method="post" action="index.php">
                    <label for="check" aria-hidden="true">Login</label>
                    <input type="email" id="email" name="email" placeholder="Email">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <button type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
            </div>
        </div>

</body>
<script src="https://kit.fontawesome.com/428f90d8fe.js" crossorigin="anonymous"></scrip>

<script type="js/login.js"></script>
</html>