<!-- php code -->
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "journeyjive";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password']; // Password in plain text

  $query = "SELECT id, password FROM signup WHERE email = ?";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    // Verify the password using password_verify
    if (password_verify($password, $stored_password)) {
      $_SESSION['user_id'] = $row['id'];
      header("Location: dashboard.php");
      exit();
    } else {
      echo "<h4>Invalid login credentials.</h4>";
    }
  } else {
    echo "<h4>Error fetching user data or user not found.</h4>";
  }
}
mysqli_close($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Links -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/title_img.avif" type="image/x-icon">
  <title>JourneyJive</title>
  <!--Eye_Icon library -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Website CSS -->
  <link rel="stylesheet" href="stylesheet/major.css">
  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>

  <div class="row" id="login-back">
    <div class="col-md-6">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/login-img.jpg" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="images/slider-2 (3).jpg" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="images/slider-3.jpg" class="d-block w-100" alt="...">

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-md-6">
      <div class="login-data">
        <h1 class="welcome">JourneyJive</h1>
        <p class="welcome-content">Welcome to JourneyJive Travels! 🌍✈️ Your gateway to unforgettable adventures and
          seamless journeys.</p>
        <p class="sit">Sit
          back, relax, and let's embark on remarkable destinations together</p>
      </div>
      <div class="login-form">
        <form id="loginForm" action="login.php" method="post">

          <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" name="email" maxlength="40" required>
          </div>

          <div class="mb-3 position-relative">
            <input type="password" id="password" required class="form-control" name="password" placeholder="Password" maxlength="20" required>
            <div class="eye-icon">
              <i class="fas fa-eye" id="togglePassword"></i>
            </div>
          </div>

          <div class="login-btn">
            <button type="button" class="login" onclick="validateLoginForm()">Login</button>
          </div>

          <div class="login-content">
            <p class="New">New here? Click below to create your account and start exploring our website</p>
          </div>

          <div class="login-link">
            <a href="sign.php" class="click">
              <p class="click">Click here to open your account</p>
            </a>
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

<script>
  const passwordInput = document.querySelector('#password');
  const togglePassword = document.querySelector('#togglePassword');

  togglePassword.addEventListener('click', () => {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
  });


  function validateLoginForm() {
    let email = document.querySelector('#exampleInputEmail1').value;
    let password = document.querySelector('#password').value;

    if (email === '' || password === '') {
      alert('Please enter both email and password');
    } else {
      document.querySelector('#loginForm').submit();
    }
  }
</script>

</html>