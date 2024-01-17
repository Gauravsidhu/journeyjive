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

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_1.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-1.jpg" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Taj Mahal, Agra, Uttar Pradesh</h5>
              <p class="card-text">The Taj Mahal is an iconic symbol of India and a UNESCO World Heritage Site. This majestic white marble mausoleum.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$100</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_2.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-2.jpg" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Jaipur, Rajasthan</h5>
              <p class="card-text">Pink City, Jaipur is the capital of the state of Rajasthan. It boasts a blend of historical forts, palaces, and vibrant markets.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$150</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_3.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-3.webp" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Varanasi, Uttar Pradesh</h5>
              <p class="card-text">Varanasi, one of the oldest continuously inhabited cities in the world, is a spiritual and cultural hub. Located on the banks of the Ganges River.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$180</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_4.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-4.jpg" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Kerala Backwaters, Kerala</h5>
              <p class="card-text">The backwaters of Kerala offer a serene and picturesque landscape of interconnected rivers, lakes, and canals.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$110</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_5.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-5.webp" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Rishikesh and Haridwar, Uttarakhand</h5>
              <p class="card-text">These twin cities on the banks of the Ganges River are known for their spiritual significance and adventure activities.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$160</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_6.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-6.jpg" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Khajuraho Temples, Madhya Pradesh</h5>
              <p class="card-text">The Khajuraho Group of Monuments is a UNESCO World Heritage Site featuring stunning medieval temples known for their intricate and erotic sculptures.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$190</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_7.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-7.webp" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Mysuru (Mysore), Karnataka</h5>
              <p class="card-text">The Khajuraho Group of Monuments is a UNESCO World Heritage Site featuring stunning medieval temples known for their intricate and erotic sculptures.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$130</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_8.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-8.avif" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Jammu and Kashmir</h5>
              <p class="card-text">Jammu and Kashmir's scenic beauty, cultural diversity, and historical significance make it a captivating destination for travelers seeking.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$170</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <!-- <a href="card_9.php" class="card-link"> -->
          <div class="card" id="place-card">
            <img src="images/blog-9.jpg" class="card-img-top" alt="..." id="blog-img">
            <div class="card-body">
              <h5 class="card-title">Goa</h5>
              <p class="card-text">Known for its beautiful beaches, vibrant nightlife, and Portuguese-influenced architecture, Goa is a popular destination for both relaxation and adventure.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$100</button>
              </div>
            </div>
          </div>
        <!-- </a> -->

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