include("contact.php");

document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
      event.preventDefault(); // Prevents the form from being submitted

      // Create a new XMLHttpRequest object
      var xhr = new XMLHttpRequest();

      // Configure the request
      xhr.open("POST", "YOUR_FORM_ACTION_URL"); // Replace with your form's action URL
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      // Handle the response
      xhr.onload = function() {
        if (xhr.status === 200) {
          // Display the success message
          alert("Thank You! Your message has been sent");
          form.reset();
        } else {
          // Display an error message
          alert("Oops! Something went wrong. Please try again.");
        }
      };

      // Send the form data
      var formData = new FormData(form);
      xhr.send(new URLSearchParams(formData));
    });
  });
