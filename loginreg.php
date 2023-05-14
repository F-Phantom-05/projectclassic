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

<script type="text/javascript">
    
  $("#btnLogin").click(function(e){
      e.preventDefault();
      var email = $("#email").val();
      var password = $("#passord").val();

      if (email == ""){
          let timerInterval
          Swal.fire({
            title: 'Please enter your Email',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              console.log('I was closed by the timer')
            }
          })

          return false;
      }

      if (passord == ""){
          let timerInterval
          Swal.fire({
            title: 'Please enter your password',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
              console.log('I was closed by the timer')
            }
          })

          return false;
      }

      $.ajax({
          url: "processlogin.php",
          type: "post",
          data: {"email":email,"passord":passord},
          success: function (response) {
              $("#msg").html(response);
             // You will get response from your PHP page (what you echo or print)
          },
          error: function(jqXHR, textStatus, errorThrown) {
             console.log(textStatus, errorThrown);
          }
      });

  })

</script>