<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Necessary meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rooted</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/sprout.ico" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;700&display=swap"
    rel="stylesheet">
  <!-- Font awesome (for icons) -->
  <script src="https://kit.fontawesome.com/4e7f5f554e.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Custom External CSS -->
  <link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" id="logo" href="index.php"><i class="fa-solid fa-seedling logo-icon"></i>Rooted</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
              Miscellaneous
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="pricing.php">Pricing</a></li>
              <li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
              <li><a class="dropdown-item" href="caretips.php">Care tips</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section>

    <div class="text-center my-5">
      <h2 class="fw-bold fs-2 pb-3">A Plan for all your needs</h2>
      <p class="fs-5">Simple and affordable price plans for your plants</p>
    </div>


    <div class="row px-5 py-4 text-white mb-5">

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="card shadow-lg bg-success">
          <div class="card-header">
            <h3>Cactus Plan</h3>
          </div>
          <div class="card-body">
            <h2>Free</h2>
            <p>One time trial consultation of 10 minutes</p>
            <p>Access to a plant care guide</p>
            <p>Access to all articles</p>
            <button type="button" onclick="location.href ='signup.php'" class="btn btn-outline-light col-12">Sign
              Up</button>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-5">
        <div class="card shadow-lg bg-success">
          <div class="card-header">
            <h3>Rose Plan</h3>
          </div>
          <div class="card-body">
            <h2>₹500 / mo</h2>
            <p>Free consultation of 60 minutes</p>
            <p>A surprise plant will be delivered at your doorstep</p>
            <p>Access to all articles</p>
            <button type="button" onclick="location.href ='signup.php'" class="btn btn-light col-12">Sign Up</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-5">
        <div class="card shadow-lg bg-success">
          <div class="card-header">
            <h3>Orchid Plan</h3>
          </div>
          <div class="card-body">
            <h2>₹800 / mo</h2>
            <p>Two personalised consultations</p>
            <p>A premium plant will be delivered at your doorstep</p>
            <p>Access to all articles</p>
            <button type="button" onclick="location.href ='signup.php'" class="btn btn-light col-12">Sign Up</button>
          </div>
        </div>
      </div>

    </div>

  </section>


  <!-- Footer -->

  <footer id="footer">
    <div class="container-fluid">
      <a href="https://www.facebook.com/" class="link-dark"><i class="social-icon fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/" class="link-dark"><i class="social-icon fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/?hl=en" class="link-dark"><i class="social-icon fab fa-instagram"></i></a>
      <a href="https://mail.google.com/" class="link-dark"><i class="social-icon fas fa-envelope"></i></a>
      <p class="footer-para">Made with 💚 in Nitte</p>
      <p>© Copyright 2022 Rooted</p>
    </div>
  </footer>



  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>