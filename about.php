<?php 

session_start();

	include("connection.php");
	include("functions.php");
  $id = $_SESSION['id'];
	$query = "select * from user where id = '$id' limit 1";
  $result = mysqli_query($con,$query);
  $user_data = mysqli_fetch_assoc($result);
  ?>

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
        <?php if($id == '')
        { ?> <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li> 
       <?php } ?>    
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
          <?php if($id == '')
        { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
       <?php }else{ ?>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php }?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- About -->
  <section class="about">
    <div class="row">
      <div class="col-lg-6 my-5 mx-auto ps-5">
        <h2 class="ms-5 fs-1 fw-bold pb-4">Our Story</h2>
        <p class="mx-5 fs-5 lh-base">
          Rooted was born out of an urge to convert a tiny hostel room into a
          private little plant sanctuary. Should have been easy, there was no
          dearth of content on the internet that explained "how to". But
          somehow there still remained a lot of unanswered questions.
        </p>
        <p class="mx-5 fs-5 lh-base">
          Here, I share my tips and findings, house plant experiments and
          green interior design ideas, from a variety of sources. Behind
          everything that we do, our motivation remains a fierce commitment to
          spreading the message of green living, the heart and soul of Rooted!
        </p>
      </div>
      <div class="col-lg-6 my-5 mx-auto">
        <img src="./images/aboutimage.jpg" class="about-image ms-5 ps-4" alt="leaves" />
      </div>
    </div>
  </section>

  <section class="about">
    <div class="row">
      <div class="col-lg-6 my-5 mx-auto ps-5">
        <img src="./images/aboutimage2.jpg" class="about-image ms-5 ps-4" alt="plants in a pot" />
      </div>
      <div class="col-lg-6 my-5 mx-auto">
        <h2 class="me-5 fs-1 fw-bold pb-4">What you'll get on Rooted</h2>
        <p class="me-5 fs-5 lh-base">
          Tons of stuff, from ideas to products, but nothing that's not
          beautiful. There is something for everyone who wants to make a
          difference to the way they live
        </p>
        <p class="me-5 fs-5 lh-base">Specifically, you can look for</p>
        <ul class="me-5 fs-5 lh-base">
          <li>Gardening 'why' and 'how to'</li>
          <li>Decor ideas</li>
          <li>Exclusive gardening products</li>
          <li>Advice on sustainable living</li>
        </ul>
        <p class="me-5 fs-5 lh-base">
          Most importantly, you'll find a way to connect with a community of
          like- minded people
        </p>
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