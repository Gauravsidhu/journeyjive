<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Links -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/title_img.avif" type="image/x-icon">
  <title>Places</title>
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
        <a href="card_1.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-1.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Al-Khazneh (Arabic: الخزنة; The Treasury)</h5>
              <p class="card-text">Al-Khazneh was built as a mausoleum and crypt at the beginning of the 1st century AD during the reign of Aretas IV Philopatris.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$100</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_2.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-2.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Japan's winter climate</h5>
              <p class="card-text"> Japan's winter climate is peaceful and serene, with plenty of snow. Others have found serenity in the Japanese Alps.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$150</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_3.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-3.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Water | US EPA</h5>
              <p class="card-text">When the water in our rivers, lakes, and oceans becomes polluted; it can endanger wildlife, make our drinking water unsafe.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$180</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_4.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-4.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dil - e Sukoon | Lucknow</h5>
              <p class="card-text">The Dil-e-Sukoon is renowned for its breathtaking architecture and lush green courtyard. It features an imposing 23-meter-high (75 feet) minaret.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$110</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_5.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-10-l.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Leh ladakh</h5>
              <p class="card-text">Leh Ladakh, often referred to simply as Ladakh, is a region located in the northern part of India in the state of Jammu and Kashmir.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$160</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_6.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-6.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Green and Brown trees</h5>
              <p class="card-text">The Green and Brown trees, gracefully dancing with the ebb and flow of the currents,In this underwater realm, the Green trees, with their vibrant and verdant hues.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$190</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

  </div>

  <div class="row">

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_7.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-7.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jeju-si, Jeju-do, South Korea</h5>
              <p class="card-text">Jeju-si, located on Jeju Island (Jeju-do) in South Korea, is a captivating city that encapsulates the natural beauty.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$130</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_8.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-8.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Under Sea</h5>
              <p class="card-text">One of the defining features of the undersea environment is its incredible diversity. From the sunlit shallows to the dark abyssal depths .</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$170</button>
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>

    <div class="col-12 col-sm-6 col-md-4">

      <div class="places-1">
        <a href="card_9.php" class="card-link">
          <div class="card" id="place-card">
            <img src="images/place-9.jpg.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Historical landmark</h5>
              <p class="card-text">The Hollywood Sign, perched high in the hills overlooking Los Angeles, is a globally recognized historical landmark.</p>
              <div class="place-btn">
                <button type="button" class="btn btn-primary" disabled>$100</button>
              </div>
            </div>
          </div>
        </a>

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