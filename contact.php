<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Links -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/title_img.avif" type="image/x-icon">
  <title>Blog</title>
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

  <header>

    <div class="row" id="navbar">

      <div class="col-12">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <img src="images/title_img.avif" alt="title img not found" class="dashboard-img">
            <a class="navbar-brand" href="dashboard.php">JourneyJive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="dashboard.php">
                    <p class="nav content">Home</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="places.php">
                    <p class="nav content">Places</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="places_details.php">
                    <p class="nav content">Places Details</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
          <a class="nav-link active" href="#">
            <p class="nav content">BLog Details</p>
          </a>
        </li> -->
                <li class="nav-item">
                  <a class="nav-link active" href="blog.php">
                    <p class="nav content">Blog</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="about.php">
                    <p class="nav content">About us</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="contact.php">
                    <p class="nav content">Contacts</p>
                  </a>
                </li>



              </ul>
              <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
            </div>
          </div>
        </nav>



      </div>

    </div>

  </header>

  <div class="row">

    <div class="col-12">

      <div class="get">

        <h4 class="Get In Touch">Get In Touch</h4>

        <p class="Home is ">Home is where your WiFi connects automatically. Here’s where ours does. Give us a call into our headquarters to say hi in person</p>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-12">

      <form action="contact_ins.php" method="post" onsubmit="return contactvalidation()">
        <div class="mb-3">
          <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Name" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="contact-email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="textarea" required></textarea>
          <label for="floatingTextarea">Comments</label>
        </div>
        <div class="contact-btn">
          <button type="submit" class="btn btn-primary">Post Comment</button>
        </div>
      </form>


    </div>

  </div>


  <div class="row">
    <div class="col-12">

      <div class="contact-map">

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://maps.google.com/maps?q=chandigarh&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


</body>

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


<script>
  function contactvalidation() {
    console.log("Inside contactvalidation function");

    let name = document.querySelector("#name").value;
    let email = document.querySelector("#contact-email").value;
    let textarea = document.querySelector("#floatingTextarea").value;

    if (name === "" || email === "" || textarea === "") {
      alert('Fill in all fields');
      console.log("Validation failed");
      return false; // Prevent form submission
    } else {
      alert("Your form submitted successfully");
      console.log("Validation passed");
      return true; // Allow form submission
    }
  }
</script>





</html>