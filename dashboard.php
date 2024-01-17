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

            </div>
          </div>
        </nav>

      </div>

    </div>

  </header>

  <div class="row">

    <div class="col-12">
      <video id="continuous-video" autoplay loop muted>
        <source src="video/video (1080p).mp4" type="video/mp4">

        Your browser does not support the video tag.
      </video>
    </div>

  </div>

  <div class="row" id="back">

    <div class="col-12">

      <div class="lets">

        <h4 class="Let's Make">Let's Make Your Best Trip Ever</h4>

        <p class="Plan and book">Plan and book your perfect trip with expert advice, travel tips, destination</p>

        <div class="dashboard-btn">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Discover Now
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Fill the form if you want to book your trip</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="dashboard_ins.php" method="post" onsubmit="return validation()">

                    <div class="mb-3">
                      <!-- <label for="username" class="form-label" id="username">Username</label> -->
                      <input type="text" class="form-control" id="username" name="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="mb-3">
                      <!-- <label for="email" class="form-label" id="email">Email address</label> -->
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="mb-3">
                      <!-- <label for="phone" class="form-label" id="phone">Phone number</label> -->
                      <input type="tel" class="form-control" id="phone" name="number" placeholder="Enter your Mobile number" required>
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" onclick="validation()">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

  <div class="row" id="back">

    <div class="col-12">

      <div class="specials">

        <h1 class="Special Offers">Special Offers</h1>

      </div>

      <div class="special-progress">

        <div class="progress" role="progressbar" <div class="progress-bar"></div>
      </div>

    </div>

  </div>

  <div class="row" id="back">

    <div class="col-md-4">

      <div class="dashboard-card-1">

        <div class="card">
          <img src="images/dd-img-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Darjeeling, West Bengal</h5>
            <p class="card-text">Famous for its tea plantations, Darjeeling offers breathtaking views of the Himalayas and is a popular destination for nature lovers.</p>
            <div class="card-btn">
              <a class="btn btn-primary disabled" role="button" aria-disabled="true">$120</a>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="col-md-4">

      <div class="dashboard-card-1">

        <div class="card">
          <img src="images/dd-img-2.jpg" class="card-img-top" alt="..." id="dashboard-img">
          <div class="card-body">
            <h5 class="card-title">Khajuraho, Madhya Pradesh</h5>
            <p class="card-text">Known for its group of stunning temples adorned with intricate erotic carvings, Khajuraho is a UNESCO World Heritage Site.</p>
            <div class="card-btn">
              <a class="btn btn-primary disabled" role="button" aria-disabled="true">$120</a>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="col-md-4">

      <div class="dashboard-card-1">

        <div class="card">
          <img src="images/dd-img-3.webp" class="card-img-top" alt="..." id="dashboard-img">
          <div class="card-body">
            <h5 class="card-title">Mumbai, Maharashtra</h5>
            <p class="card-text">The financial capital of India, Mumbai offers a mix of colonial architecture, bustling markets, and a vibrant arts and entertainment scene.</p>
            <div class="card-btn">
              <a class="btn btn-primary disabled" role="button" aria-disabled="true">$120</a>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-12">

      <div class="specials">

        <h1 class="Special Offers">Our Benefit</h1>

      </div>

      <div class="special-progress">

        <div class="progress" role="progressbar" <div class="progress-bar"></div>
      </div>

    </div>

  </div>

  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="benefit-1">
        <img src="images/benefit-1.webp" alt="benefit image not found" class="benefit-img">
        <h4 class="Personal Schedule">Personal Schedule</h4>
        <p class="users">Users can create personalized itineraries by selecting destinations, activities, attractions, and events they wish to include in their travel plans.</p>
      </div>
      <div class="benefit-1">
        <img src="images/benefit-2.webp" alt="benefit image not found" class="benefit-img">
        <h4 class="Personal Schedule">Luxury Interiors</h4>
        <p class="users">JourneyJive presents Luxury Interiors as a pinnacle of opulence and comfort during your travels. Offering a seamless blend of sophistication and lavishness.</p>
      </div>
      <div class="benefit-1">
        <img src="images/benefit-3.webp" alt="benefit image not found" class="benefit-img">
        <h4 class="Personal Schedule">Safe & Confidential</h4>
        <p class="users">Your safety and confidentiality are our utmost priority. We prioritize your peace of mind by implementing robust safety measures and maintaining strict confidentiality throughout your travel experience</p>
      </div>
      <div class="benefit-1">
        <img src="images/benefit-4.webp" alt="benefit image not found" class="benefit-img">
        <h4 class="Personal Schedule">Professional Crew</h4>
        <p class="users">Our team comprises a dedicated and professional crew committed to curating exceptional travel experiences for our customers. Our crew consists of seasoned experts in various aspects of travel, from itinerary planning to logistics and customer service.</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <img src="images/bp-1.jpg.webp" alt="image not found" class="img-fluid" id="bp-1 image" onmouseover="enlargeImage(this)" onmouseout="normalSizeImage(this)">
      <img src="images/bp-3.jpg.webp" alt="image not found" class="img-fluid" id="bp-3 image" onmouseover="enlargeImage(this)" onmouseout="normalSizeImage(this)">
      <img src="images/bp-2.jpg.webp" alt="image not found" class="img-fluid" id="bp-2 image" onmouseover="enlargeImage(this)" onmouseout="normalSizeImage(this)">
      <img src="images/bp-4.jpg.webp" alt="image not found" class="img-fluid" id="bp-4 image" onmouseover="enlargeImage(this)" onmouseout="normalSizeImage(this)">
    </div>

  </div>

  <div class="row">

    <div class="col-12">

      <div class="destination">

        <h4 class="destination">Destination Gallery</h4>

        <p class="This gallery ">This gallery is carefully curated to provide users with a visual journey around the world</p>

        <div id="imageContainer">
          <img id="mainImage" src="images/gallery-1.jpg" class="img-fluid">
        </div>

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
  const video = document.querySelector('#continuous-video');

  video.addEventListener('ended', function() {
    this.currentTime = 0;
    this.play();
  }, false);

  function validation() {
    // let id = document.querySelector('#id').value;
    let username = document.querySelector('#username').value;
    let email = document.querySelector('#email').value;
    let phone = document.querySelector('#phone').value;

    if (username === '' || email === '' || phone === '') {
      alert('Fill the form');
      return false;
    } else {
      alert('Your data submitted successfully\nWe will call you shortly');

      return true;
    }
  }

  function enlargeImage(img) {
    img.style.transform = 'scale(1.1)';
    img.style.transition = 'transform 0.3s ease';
  }

  function normalSizeImage(img) {
    img.style.transform = 'scale(1)';
  }

  let images = ['images/gallery-1.jpg', 'images/gallery-2.jpg', 'images/gallery-3.jpg', 'images/gallery-4.jpg'];
  let imageIndex = 0;

  function changeImage() {
    const currentImage = document.querySelector('#mainImage');
    currentImage.classList.remove('visible');
    currentImage.classList.add('hidden');
    setTimeout(() => {
      currentImage.src = images[imageIndex];
      currentImage.classList.remove('hidden');
      currentImage.classList.add('visible');
      imageIndex = (imageIndex + 1) % images.length;
    }, 1000);
  }

  setInterval(changeImage, 3000);
</script>

</html>