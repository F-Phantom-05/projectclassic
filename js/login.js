
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

