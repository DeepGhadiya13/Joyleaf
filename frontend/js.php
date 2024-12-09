<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Owl caresoule js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  // Lodar Script
  window.onload = function() {
    document.getElementById('loader').style.display = 'flex';
    setTimeout(() => {
      document.getElementById('loader').style.display = 'none';
    }, 2000);
  };

  // Owl Caresoule Script
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [
        '<i class="fas fa-less-than"></i>',
        '<i class="fas fa-greater-than"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1024: {
          items: 2,
        },
        1201: {
          items: 3,
        },
      },
    });
  });

  // Validation Form

  function validateform() {
    var name = document.SingUpForm.name.value.trim();
    var email = document.SingUpForm.email.value.trim();
    var contact = document.SingUpForm.contact.value.trim();

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    var isValid = true;
    // Validate Name
    if (name === "") {
      document.getElementById("e-name").innerHTML = "Please Enter Name";
      isValid = false;
    } else if (!isNaN(name) || /\d/.test(name)) {
      document.getElementById("e-name").innerHTML = "Name cannot contain numbers";
      isValid = false;
    } else {
      document.getElementById("e-name").innerHTML = "";
    }
    // Validate Email
    if (email === "") {
      document.getElementById("e-email").innerHTML = "Please Enter Email";
      isValid = false;
    } else if (!emailRegex.test(email)) {
      document.getElementById("e-email").innerHTML = "Please Enter a Valid Email Address";
      isValid = false;
    } else {
      document.getElementById("e-email").innerHTML = "";
    }
    // Validate Number
    if (contact === "") {
      document.getElementById("e-number").innerHTML = "Please Enter a Number";
      isValid = false;
    } else if (isNaN(contact) || contact.length < 10) {
      document.getElementById("e-number").innerHTML = "Please Enter a Valid Contact Number (at least 10 digits)";
      isValid = false;
    } else {
      document.getElementById("e-number").innerHTML = "";
    }

    return isValid;
  }
  // Validate Name
  document.SingUpForm.name.addEventListener("input", function() {
    var name = this.value.trim();
    if (name === "") {
      document.getElementById("e-name").innerHTML = "Please Enter Name";
    } else if (!isNaN(name) || /\d/.test(name)) {
      document.getElementById("e-name").innerHTML = "Name can not be numbers";
    } else {
      document.getElementById("e-name").innerHTML = "";
    }
  });
  // Validate Email
  document.SingUpForm.email.addEventListener("input", function() {
    var email = this.value.trim();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
      document.getElementById("e-email").innerHTML = "Please Enter Email";
    } else if (!emailRegex.test(email)) {
      document.getElementById("e-email").innerHTML = "Please Enter a Valid Email Address";
    } else {
      document.getElementById("e-email").innerHTML = "";
    }
  });
    // Validate Number
  document.SingUpForm.contact.addEventListener("input", function() {
    var contact = this.value.trim();
    if (contact === "") {
      document.getElementById("e-number").innerHTML = "Please Enter a Number";
    } else if (isNaN(contact) || contact.length < 10) {
      document.getElementById("e-number").innerHTML = "Please Enter a Valid Contact Number (at least 10 digits)";
    } else {
      document.getElementById("e-number").innerHTML = "";
    }
  });
</script>

</body>

</html>