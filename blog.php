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
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@400;700&display=swap"
    rel="stylesheet" />
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
              <li>
                <a class="dropdown-item" href="pricing.php">Pricing</a>
              </li>
              <li>
                <a class="dropdown-item" href="gallery.php">Gallery</a>
              </li>
              <li>
                <a class="dropdown-item" href="caretips.php">Care tips</a>
              </li>
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

  <!-- Blog -->
  <section>
    <h2 class="fw-bold fs-2 my-5 mx-5">Check out our posts</h2>
    <div class="row my-5 mx-4">
      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post2.php"><img src="images/blog/p2.jpg" class="card-img-top width-100" alt="plants in pots" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post2.php" class="text-decoration-none link-dark fs-5">What planter/pot should I buy?</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post1.php"><img src="images/blog/p1.jpg" class="card-img-top width-100"
              alt="Gardening tools spread out" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post1.php" class="text-decoration-none link-dark fs-5">Gardening is a hobby for all</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post3.php"><img src="images/blog/p3.jpg" class="card-img-top width-100"
              alt="planting a plant" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post3.php" class="text-decoration-none link-dark fs-5">Fix these gardening mistakes today!</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row my-5 mx-4">
      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post6.php"><img src="images/blog/p6.jpg" class="card-img-top width-100" alt="suitcase" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post6.php" class="text-decoration-none link-dark fs-5">Plant vs Holiday</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post4.php"><img src="images/blog/p4.jpg" class="card-img-top width-100" alt="trees in snow" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post4.php" class="text-decoration-none link-dark fs-5">The effect of winter season on plants</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 px-4">
        <div class="card mx-auto">
          <a href="post5.php"><img src="images/blog/p5.jpg" class="card-img-top width-100"
              alt="plant parent book" /></a>
          <div class="card-body">
            <p class="card-text">
              <a href="post5.php" class="text-decoration-none link-dark fs-5">The New Plant Parent (Book Review)</a>
            </p>
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