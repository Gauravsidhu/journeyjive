<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Links -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/title_img.avif" type="image/x-icon">
  <title>signup</title>
  <!--Eye_Icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Website CSS -->
  <link rel="stylesheet" href="stylesheet/major.css">
  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body id="back-img">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="signup-content">
          <h1 class="signup-content-a">JourneyJive</h1>
          <p class="sign-Welcome">Welcome to JourneyJive Travels! 🌍✈️ Your gateway to unforgettable adventures and seamless journeys.</p>
          <p class="sign-get">To get started with creating your account, please fill out the form below with the required information:</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <form action="sign_ins.php" method="post">
          <!-- <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="Serial No" name="id">
            <label for="floatingInput" class="sign-label">Serial No</label>
          </div> -->
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingtext" placeholder="First Name" name="firstname" required>
            <label for="floatingtext" class="sign-label">First Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingname" placeholder="Last Name" name="lastname" required>
            <label for="floatingname" class="sign-label">Last Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingbirth" placeholder="Date of Birth" name="birth" required>
            <label for="floatingbirth" class="sign-label">Date of Birth</label>
          </div>

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingemail" placeholder="Mobile number" name="email" required>
            <label for="floatingnumber" class="sign-label">Email address</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingpassword" placeholder="Password" name="password" required>
            <label for="floatingpassword" class="sign-label">Password</label>
            <div class="eye-icon" id="sign-eye" onclick="togglePasswordVisibility()">
              <i class="fas fa-eye" id="togglePassword"></i>
            </div>
          </div>

          <div class="form-floating mb-3" id="address">
            <input type="text" class="form-control" id="floatingaddress" placeholder="Address" name="address" required>
            <label for="floatingaddress" class="sign-label">Address</label>
          </div>

          <div class="sign-btn">
            <button class="btn btn-primary" type="submit" onclick="return validateForm()">Sign Up</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <footer>

    <div class="row">

      <div class="col-12">

        <div class="footer-journey">

          <h4 class="footer-journey">JourneyJive</h4>

          <p class="embark">Embark on a seamless travel experience with JourneyJive</p>

          <div class="footer-icons">

            <button type="button" class="btn btn-outline-primary" onclick="alert('Sorry try later')"><img src="images/facebook-logo.png" alt="facebook-logo" class="facebook-logo"></button><button type="button" class="btn btn-outline-primary" onclick="alert('Sorry try later')"><img src="images/insta.webp" alt="insta-logo" class="insta-logo"></button><button type="button" class="btn btn-outline-primary" onclick="alert('Sorry try later')"><img src="images/linkdin-logo.png" alt="linkdin-logo" class="linkdin-logo"></button><button type="button" class="btn btn-outline-primary" onclick="alert('Sorry try later')"><img src="images/twitter.png" alt="linkdin-logo" class="linkdin-logo"></button>

          </div>

          <div class="footer-copyright">

            <p class="Copyright">Copyright ©2024 All rights reserved</p>

          </div>

        </div>

      </div>

    </div>

  </footer>

</body>

</html>

<script>
  function validateForm() {

    let firstname = document.querySelector('#floatingtext').value;
    let lastname = document.querySelector('#floatingname').value;
    let birth = document.querySelector('#floatingbirth').value;
    let email = document.querySelector('#floatingemail').value;
    let password = document.querySelector('#floatingpassword').value;
    let address = document.querySelector('#floatingaddress').value;

    if (firstname === '' || lastname === '' || birth === '' || email === '' || password === '' || address === '') {
      alert('Please fill in all fields');
      return false;
    }

    // You can add more validation rules if needed

    return true; // Form will be submitted if all fields are filled

  }

  function togglePasswordVisibility() {
    const passwordInput = document.querySelector('#floatingpassword');
    const togglePassword = document.querySelector('#togglePassword');

    const type = passwordInput.type === 'password' ? 'text' : 'password';
    passwordInput.type = type;

    // Toggle eye icon between open and closed
    togglePassword.classList.toggle('fa-eye', type === 'text');
    togglePassword.classList.toggle('fa-eye-slash', type === 'password');
  }
</script>