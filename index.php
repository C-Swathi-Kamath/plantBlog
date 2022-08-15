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

  <section id="title">
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

    <div class="row title-container">
      <div class="title col-lg-6">
        <h1 class="title-heading">Plants make everything better!</h1>
        <p class="title-para">A community to educate and inspire people around the world to cultivate their own garden,
          care for plants successfully and grow more joy in their lives</p>
        <button type="button" onclick="location.href ='signup.php'" class="btn btn-success btn-lg title-button">Join
          us</button>
        <button type="button" onclick="location.href ='caretips.php'"
          class="btn btn-outline-success btn-lg title-button">Care tips 🌱</button>
      </div>
    </div>

  </section>

  <!-- Steps -->
  <section id="steps">

    <div class="row text-center">

      <h2 class="steps-main-heading">Plant one today</h2>

      <div class="steps-box col-lg-4 ">
        <i class="fa-solid fa-sun fa-4x icon"></i>
        <h3 class="steps-heading">Find an ideal spot with sufficient light</h3>
        <p class="steps-para">Make sure the plant has enough space to grow. Research your plant variety online to find
          information on its needs </p>
      </div>

      <div class="steps-box col-lg-4">
        <i class="fa-brands fa-pagelines fa-4x icon"></i>
        <h3 class="steps-heading">Dig a hole for your plant 2-3 times as wide as the root</h3>
        <p class="steps-para"> Set the plant in the middle of the hole, positioning it so the stem is straight
          vertically. Push the dug-out soil back into the hole</p>
      </div>

      <div class="steps-box col-lg-4 ">
        <i class="fa-solid fa-droplet fa-4x icon"></i>
        <h3 class="steps-heading">Water the soil until it is moist</h3>
        <p class="steps-para">Spread an organic mulch. It insulates the plant, helps with water retention, and blocks
          out harmful weeds</p>
      </div>

    </div>

  </section>

  <!-- Recommended -->
  <section id="recommended">
    <h2 class="recommended-text">Recommended Plants</h2>
    <div class="row">
      <div class="col-lg-4">
        <img src="images/haworthia.jpg" class="rounded recommended-image shadow-lg" alt="haworthia">
      </div>
      <div class="col-lg-4">
        <img src="images/pothos.jpg" class="rounded recommended-image shadow-lg" alt="pothos">
      </div>
      <div class="col-lg-4">
        <img src="images/sansevieria.jpg" class="rounded recommended-image shadow-lg" alt="sansevieria">
      </div>
    </div>

  </section>

  <!-- Testimonials -->

  <section id="testimonials" class="text-center">

    <div id="testimonial-controls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">After killing more than 30 house plants I finally learnt how to grow them, thanks
            to Rooted!</h2>
          <img src="images/rickson.png" alt="rickson-profile" class="testimonial-image">
          <em>Rickson, Kundapur</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">My plants have never looked so healthy, lush and their growth is absolutely
            amazing!</h2>
          <img class="testimonial-image" src="images/sanidhya.png" alt="sanidhya-profile">
          <em>Sanidhya, Puttur</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Unique and fabulous. It offers everything you would want in a plant care blog
          </h2>
          <img class="testimonial-image" src="images/joel.png" alt="joel-profile">
          <em>Joel, Brahmavar</em>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-controls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonial-controls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
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